<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostsView extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.posts-view', [
            'posts' => $posts
        ]);
    }
}
