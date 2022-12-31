<?php

namespace App\Http\Livewire\Profile\Tabs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeactivateAccount extends Component
{
    public $check = false;

    public function rules()
    {
        return [
            'check' => ['accepted']
        ];
    }

    public function submit(Request $request)
    {
        $this->validate();

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        self::toastSuccess('Account deactivated successfully!');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.profile.tabs.deactivate-account');
    }
}
