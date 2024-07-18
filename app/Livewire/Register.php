<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;

#[Title('Registration')]

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $remember;

    public function register(){
       $validated = $this->validate([
            'name'=>'required|min:2',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:3',
            'password_confirmation'=>'required|same:password',
        ]);
        User::create($validated);
        $this->reset();
       session()->flash('message','Registered Successfully');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
