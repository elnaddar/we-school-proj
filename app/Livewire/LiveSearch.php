<?php

namespace App\Livewire;

use Livewire\Component;

class LiveSearch extends Component
{
    public $search;

    public function handleOnChange()
    {
        // dd($this->search);
        $this->dispatch("search", search: $this->search);
    }
    public function render()
    {
        return view('livewire.live-search');
    }
}
