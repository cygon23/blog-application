<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text_colour',
        'bg_colour'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
