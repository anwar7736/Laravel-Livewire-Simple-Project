<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class Profile extends Component
{
    
    public $name,$email;

    
    public function resetInput()
	{
		$this->name='';
		$this->email='';
	}
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
    }
    function UpdateProfile($id)
    {
        $this->validate( [
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
            
            $user = User::find($id);
            $user->name = $this->name;
            $user->email = $this->email;
            $user->save();
            $this->resetInput();
            session()->flash('message', 'Profile updated successfully');

    }
    public function render()
    {
        return view('livewire.profile');
    }
}
