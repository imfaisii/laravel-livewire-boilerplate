<?php

namespace App\Http\Livewire\Profile\Tabs;

use Livewire\Component;

class RecentDevices extends Component
{
    public $recentDevices = [];

    public function mount()
    {
        $this->recentDevices = auth()->user()->getUserAgents();
    }

    public function render()
    {
        return view('livewire.profile.tabs.recent-devices');
    }
}
