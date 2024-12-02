<?php

namespace App\Http\Livewire\Users;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 12;
    public function render()
    {
        
        if($this->search != ''){
            $users = $this->searchQuery($this->search);
        }
        else {
            $users = User::where('id','<>',auth()->user()->id);
        }

        return view('livewire.users.user-list', [
            'users' => $users->paginate($this->perPage)
        ])->extends('layouts.app')->section('content');
    }

    public function mount()
    {
        //
    }
    function searchQuery($q){
        return User::where('id','<>', auth()->user()->id)->where(function($query) use ($q) {
            $query->where('name', 'LIKE', '%'.$q.'%')
                ->orWhere('email', 'LIKE', '%'.$q.'%');
        });

    }
}
