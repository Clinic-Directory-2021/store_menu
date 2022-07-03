<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\users as users;

class Login extends Component
{
    public $users;
    public $username;
    public $password;
    public $a;
    public function login(){
        // $this->users = $this->username . ' ' . $this->password;
        if($this->username == null || $this->password == null){
            $this->users = 'Please input all fields';
        }
        else if(!count(users::all())){
            $this->users = 'Wrong credentials';
        }
        else{
        foreach(users::all() as $user){
            if($user->username == $this->username && $user->password == $this->password){
                session(['session_key'=>$user->ID]);
                session(['username'=>$this->username]);   
                return redirect()->to('/menu');
            }
            else{
                $this->users = 'Wrong credentials';
            }
        }
    }
        
    }
    public function render()
    {   
        return view('livewire.login');
    }
}
