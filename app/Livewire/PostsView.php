<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostsView extends Component
{

    public $search;
    #[On("search")]
    public function search(string $search = null)
    {
        $this->search = $search;
    }
    #[On("post-created")]
    public function render()
    {
        $posts = Post::where('title', 'like', "%{$this->search}%")->get();
        return view('livewire.posts-view', [
            'posts' => $posts
        ]);
    }
}
