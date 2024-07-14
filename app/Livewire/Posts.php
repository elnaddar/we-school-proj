<?php

namespace App\Livewire;

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
        dd([$this->title, $this->content, $this->image]);
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
