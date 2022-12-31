<?php

namespace App\Http\Livewire\Permissions\Users;

use App\Models\User;
use App\Traits\SessionMessage;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    use SessionMessage;

    public $user, $name, $email, $password, $password_confimation, $roles, $selectedRoles = [];

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRoles = $user->roles->pluck('id')->toArray();
        $this->roles = Role::all();
    }

    public function rules()
    {
        return [
            'name' => ['string'],
            'email' => ['email', "unique:users,email,{$this->user['id']}"],
            'password' => ['confirmed'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if ($this->password) {
            $this->user->update(['password' => Hash::make($this->password)]);
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->user->syncRoles($this->selectedRoles);

        self::toastSuccess('User updated successfully.');
    }

    public function render()
    {
        return view('livewire.permissions.users.edit')
            ->extends('layouts.app')
            ->section('content');
    }
}
