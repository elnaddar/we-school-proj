<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function increase()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
