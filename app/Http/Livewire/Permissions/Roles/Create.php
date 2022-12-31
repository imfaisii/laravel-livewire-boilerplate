<?php

namespace App\Http\Livewire\Permissions\Roles;

use App\Traits\SessionMessage;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use SessionMessage;

    public $permissions, $name, $selectedPermissions = [];

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'unique:roles,name'],
            'selectedPermissions' => ['array'],
        ];
    }

    public function submit()
    {
        $this->validate();

        $role = Role::create(['name' => $this->name]);

        $role->givePermissionTo($this->selectedPermissions);

        self::toastSuccess('Role created successfully.');

        $this->resetExcept('permissions');
    }

    public function render()
    {
        return view('livewire.permissions.roles.create')
            ->extends('layouts.app')
            ->section('content');
    }
}
