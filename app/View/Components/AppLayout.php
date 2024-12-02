<?php

namespace App\View\Components;

use App\Models\Role;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
            return view('layouts.app');

        }
        return view('layouts.buyer');
    }
}
