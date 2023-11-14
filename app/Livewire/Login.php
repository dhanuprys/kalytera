<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[\Livewire\Attributes\Title('Kalytera - Masuk')]
class Login extends Component
{
    #[Rule('required')]
    public $username = '';

    public $password = '';

    public function doLogin()
    {
        $this->validate();

        if (!Auth::attempt([
            'username' => $this->username,
            'password' => $this->password
        ]))
        {
            $this->reset('password');
            return back()->with('error', 'User atau password salah'); 
        }

        session()->regenerate();
        
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
