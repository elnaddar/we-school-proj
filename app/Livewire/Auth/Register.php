<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate("required|min:5|max:42")]
    public $name;
    #[Validate("required|email|unique:users")]
    public $email;
    #[Validate("required|confirmed")]
    public $password;
    public $password_confirmation;

    public function register(){
        $this->validate();
        $user = User::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "password"=> $this->password,
        ]);
        $user->assignRole("reader");
        Auth::login($user);
        redirect()->route("home");
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
