<?php

namespace App\Traits;

trait SessionMessage
{
    public function sessionSuccess($message = 'Action successful')
    {
        session()->flash('status', ['type' => 'success', 'message' => $message]);
    }

    public function sessionError($message = 'Action failed')
    {
        session()->flash('status', ['type' => 'error', 'message' => $message]);
    }

    public function toastSuccess($message = 'Action successful')
    {
        $this->dispatchBrowserEvent('toast', ['success' => true, 'message' => $message]);
    }

    public function toastError($message = 'Action failed')
    {
        $this->dispatchBrowserEvent('toast', ['success' => false, 'message' => $message]);
    }
}
