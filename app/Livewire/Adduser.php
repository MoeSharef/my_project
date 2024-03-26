<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Rule;

class Adduser extends Component
{
    public $name;
    public $email;
    public $password;


    public function render()
    {
        return view('livewire.adduser');
    }
    public function AddUser()
    {
        dd("test");
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset(['name', 'email', 'password']);
        $this->name = "";
        $this->email = "";
        $this->password = "";
    }
}
