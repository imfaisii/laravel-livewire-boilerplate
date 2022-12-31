<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Index extends Component
{
    public $user, $tab = 'profile';

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.profile.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
