<?php

namespace App\Http\Livewire\Permissions\Users;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.permissions.users.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
