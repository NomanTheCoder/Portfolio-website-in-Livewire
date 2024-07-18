<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    public function login(){
      $validated= $this->validate([
        'email'=>'required|email',
        'password'=>'required',

       ]);
       if(Auth::attempt($validated)){
        $this->js("alert('Login Successfully!')");
        return redirect('/dashboard');
       }
       else{
        session()->flash('error','Invalid Credentials');
       }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
