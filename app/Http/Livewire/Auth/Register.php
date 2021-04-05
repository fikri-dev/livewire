<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function register(){
        $data = $this->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|same:passwordConfirmation'
        ]);
        
        User::create([
            'email'=>$this->email,
            'password'=> bcrypt($this->password)
        ]);

        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.auth.register');
    }
}