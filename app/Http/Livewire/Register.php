<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class Register extends Component
{

    public $name,$email,$password,$password_confirm;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);
    }
    function Registration()
    {
        $this->validate( [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password =Hash::make( $this->password);
        $user->save();

        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.register');
    }
}
