<?php

namespace App\Http\Livewire\Auth;

use App\Models\Department;
use App\Models\Role;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register',[
            'departments'=>Department::all(),
            'roles'=>Role::all(),
        ]);
    }
}
