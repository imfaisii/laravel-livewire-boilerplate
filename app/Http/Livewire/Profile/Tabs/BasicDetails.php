<?php

namespace App\Http\Livewire\Profile\Tabs;

use App\Models\User;
use App\Traits\SessionMessage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BasicDetails extends Component
{
    use WithFileUploads, SessionMessage;

    public $user, $name, $email, $avatar;

    public function mount()
    {
        $this->user = auth()->user();

        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', "unique:users,email,{$this->user->id}"],
            'avatar' => ['image', 'max:1024'],
        ];
    }

    public function updatedAvatar()
    {
        $this->validateOnly('avatar');

        $this->user->update(['avatar' => $this->avatar->store('avatars', 'public')]);

        self::toastSuccess('Avatar updated successfully.');
    }

    public function submit()
    {
        $this->validate();
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        self::toastSuccess('User updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.tabs.basic-details');
    }
}
