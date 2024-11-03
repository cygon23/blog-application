<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'image',
        'published_at',
        'featured'
    ];


    /** wring the filtering  using scop for published posts */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }


    public function scopePopular($query)
    {
        $query->withCount('likes')->orderBy('likes_count', 'desc');
    }

    public function scopeWithCategory($query, string $category)
    {
        $query->whereHas('categories', function ($query) use ($category) {
            $query->where('slug', $category);
        });
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //counting numbers of likes

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    //for handling readadable time in humanic
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime'
        ];
    }

    //reading time for each post avg 250-300

    public function readingTime()
    {


        $min = round(str_word_count($this->body) / 250);

        return ($min < 1) ? 1 : $min;
    }


    //reduce the amount of words in each single blog
    public function getExept()
    {
        return Str::limit(strip_tags($this->body), 250);
    }

    public function getThumbnailImage()
    {

        $isUrl =  str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
