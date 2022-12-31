<?php

namespace App\Http\Livewire\Auth;

use App\Traits\SessionMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    use SessionMessage;

    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];


    public function login()
    {
        $this->validate();

        Auth::attempt(['email' => $this->email, 'password' => $this->password])
            ? redirect()->route('dashboard')
            : self::sessionError('Invalid email or password.');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
