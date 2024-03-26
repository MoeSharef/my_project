<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Table extends Component
{
    public function render()
    {
        $user = User::all();
        return view('livewire.table')->with('users', $user);
    }
    public function edit($id){
        dd($id);
    }
}
