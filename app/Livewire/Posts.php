<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    #[Validate("required|min:5|max:50")]
    public $title;
    #[Validate("required|min:5|max:250")]
    public $content;
    #[Validate("nullable|image|max:2048")]
    public $image;

    public function create()
    {
        $this->validate();
        Post::create([
            "title" => $this->title,
            "content" => $this->content,
            "image" => $this->image?->store("uploads/posts", "public"),
        ]);
        $this->reset();
    }

    public function render()
    {
        $posts = count(Post::all() ?? []);
        return view('livewire.posts', ["posts" => $posts]);
    }
}
