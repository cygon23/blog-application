<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

use function Laravel\Prompts\search;

class PostList extends Component
{

    //for the same results of url in different page
    #[Url()]
    public $search = '';

    // for sorting items
    #[Url()]
    public $sort = 'desc';


    // for sorting category
    #[Url()]
    public $category = '';

    //fro sorting popular one

    #[Url()]
    public $popular = 'false';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    //to pass posts into live wire
    #[Computed()]
    public function posts()
    {
        return Post::published()
            // for enger loading
            ->with('author')
            ->when($this->activeCategory, function ($query) {
                $query->WithCategory($this->category);
            })
            ->when($this->popular, function ($query) {
                $query->popular();
            })
            ->where('title', 'like', "%{$this->search}%")
            ->orderBy('published_at', $this->sort)
            ->paginate(3);
    }

    #[Computed()]
    public function activeCategory()
    {
        if ($this->category === null || $this->category === '') {
            return null;
        }

        return Category::where('slug', $this->category)->first();
    }


    //for clearing the searches
    public function clearFilter()
    {
        $this->search = '';
        $this->category = '';

        $this->reset();
    }

    public function render()
    {
        return view('livewire.post-list');
    }

    //for live search listen using on notation and passing the event
    #[On('search')]
    //for data searching
    public function updateSearch($search)
    {
        $this->search = $search;

        $this->reset();
    }
}
