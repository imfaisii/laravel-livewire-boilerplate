<?php

namespace App\Http\Livewire\Permissions\Users;

use App\Models\User;
use App\Traits\SessionMessage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use SessionMessage;

    public $user, $roles, $selectedRoles = [];

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function rules()
    {
        return [
            'user.name' => ['required', 'string'],
            'user.email' => ['required', 'email', 'unique:users,email'],
            'user.password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->user['password'] = Hash::make($this->user['password']);

        User::firstOrCreate(['email' => $this->user['email']], $this->user)->syncRoles($this->selectedRoles);

        $this->resetExcept('roles');

        self::toastSuccess('User created successfully.');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.permissions.users.create')
            ->extends('layouts.app')
            ->section('content');
    }
}
