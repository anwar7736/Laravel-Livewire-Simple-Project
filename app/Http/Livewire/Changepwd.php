<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;
use Hash;
class Changepwd extends Component
{
    public $oldpass,$newpass,$cpass;
    
    public function updated($field)
    {
        $this->validateOnly($field, [
            'oldpass' => 'required|min:5',
            'newpass' => 'required|min:5',
        ]);
    }
    function ChangePwd($id)
    {
        $this->validate( [
            'oldpass' => 'required|min:5',
            'newpass' => 'required|min:5',
        ]);
            $pass = Auth::user()->password;
            if(Hash::check($this->oldpass, $pass))
            {
                $user = User::find($id);
                $user->password = Hash::make($this->newpass);
                $user->save(); 
                Auth::logout();
                return redirect(route('login'));
            }
              else{
            session()->flash('message', 'Old Password did not match!');
           }
            
        

    }
    public function render()
    {
        return view('livewire.changepwd');
    }
}
