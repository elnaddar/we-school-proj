<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate("required|email")]
    public $email;
    #[Validate("required")]
    public $password;
    public bool $remember = false;

    public function login(){
        $this->validate();
        if(auth()->attempt(["email"=> $this->email,"password"=> $this->password], $this->remember)){
            redirect()->route("home");
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
