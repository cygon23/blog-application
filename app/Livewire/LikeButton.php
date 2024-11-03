<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component

{
    #[Reactive]
    public Post $post;


    public function toggleLike()
    {
        // Check if the user is authenticated
        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        if ($user->hasLiked($this->post)) {
            // If the user has already liked the post, remove the like
            $user->likes()->detach($this->post->id);
        } else {
            // Otherwise, add a like to the post
            $user->likes()->attach($this->post->id);
        }
    }


    public function render()
    {
        return view('livewire.like-button');
    }
}
