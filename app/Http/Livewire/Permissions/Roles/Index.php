<?php

namespace App\Http\Livewire\Permissions\Roles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.permissions.roles.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
