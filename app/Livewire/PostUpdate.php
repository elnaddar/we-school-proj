<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostUpdate extends Component
{
    use WithFileUploads;
    public Post $post;

    #[Validate("required|min:5|max:50")]
    public $title;
    #[Validate("required|min:5|max:250")]
    public $content;
    #[Validate("nullable|image|max:2048")]
    public $image;

    public function mount()
    {
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->image = $this->post->image;
    }
    public function update()
    {
        $this->validate();
        $this->post->update([
            "title" => $this->title,
            "content" => $this->content,
            "image" => $this->image?->store("uploads/posts", "public"),
        ]);
        redirect()->route("home");
    }
    public function render()
    {
        return view('livewire.post-update');
    }
}
