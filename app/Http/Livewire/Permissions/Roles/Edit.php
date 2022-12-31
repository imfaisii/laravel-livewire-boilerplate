<?php

namespace App\Http\Livewire\Permissions\Roles;

use App\Traits\SessionMessage;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    use SessionMessage;

    public $role, $name, $permissions, $selectedPermissions = [];

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        $this->permissions = Permission::all();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', "unique:roles,name,{$this->role->id}"],
            'permissions' => ['array'],
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->role->update(['name' => $this->name]);

        $this->role->permissions()->sync($this->selectedPermissions);

        self::toastSuccess('Role updated successfully.');
    }

    public function render()
    {
        return view('livewire.permissions.roles.edit')
            ->extends('layouts.app')
            ->section('content');
    }
}
