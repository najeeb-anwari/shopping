<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class UserRow extends Component
{
    protected $rules = [
        'user.status' => 'required'
    ];
    public $user;

    public function render()
    {
        return view('livewire.users.user-row');
    }
    
    public function mount($user)
    {
        $this->user = $user;
    }

    public function updatingUserStatus($value)
    {
        $this->user->status = $value;
        $this->user->save();
    }
}
