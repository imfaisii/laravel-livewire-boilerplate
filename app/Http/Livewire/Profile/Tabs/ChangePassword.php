<?php

namespace App\Http\Livewire\Profile\Tabs;

use App\Traits\SessionMessage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class ChangePassword extends Component
{
    use SessionMessage;

    public $user, $current_password, $password, $password_confirmation;

    public function mount()
    {
        $this->user = auth()->user();
    }
    public function rules()
    {
        return [
            'current_password' => ['required'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if (!Hash::check($this->current_password, $this->user->password)) {
            self::toastError('Please enter a correct current password.');

            return false;
        };

        $this->user->update(['password' => Hash::make($this->password)]);

        self::toastSuccess('Password changed successfully');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.profile.tabs.change-password');
    }
}
