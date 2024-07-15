<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostsView extends Component
{
    #[On("post-created")]
    public function render()
    {
        $posts = Post::all();
        return view('livewire.posts-view', [
            'posts' => $posts
        ]);
    }
}
