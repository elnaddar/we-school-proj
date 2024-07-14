<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Posts extends Component
{

    #[Validate("required|min:5|max:50")]
    public $title;
    #[Validate("required|min:5|max:250")]
    public $content;
    public $image;

    public function create()
    {
        $this->validate();
        Post::create([
            "title" => $this->title,
            "content" => $this->content
        ]);
        $this->reset();
    }

    public function render()
    {
        $posts = count(Post::all() ?? []);
        return view('livewire.posts', ["posts" => $posts]);
    }
}
