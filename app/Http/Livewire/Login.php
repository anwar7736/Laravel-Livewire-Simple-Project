<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;
class Login extends Component
{
    public $email,$password,$remember;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }
    function Login()
    {
        $this->validate( [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password]))
        {
            return redirect(route('home'));
        }

            session()->flash('message', 'Email or password is wrong!');

    }
    public function render()
    {
        return view('livewire.login');
    }
}
