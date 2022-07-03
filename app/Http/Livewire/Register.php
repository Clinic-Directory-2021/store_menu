<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\users;

class Register extends Component
{
    public $username;
    public $password;
    public $confirm_password;
    public $a;
    public $color;
    public function register(){
        if($this->password != $this->confirm_password){
            $this->a = 'Password and Confirm Password does not matched.';
            $this->color = '#bb2124';
        }
        else{
            try{
                $user = new users;
                $user->username=$this->username;
                $user->password=$this->password; 
                $user->save();

                $this->a = 'Successfully registered';
                $this->username = null;
                $this->password = null;
                $this->confirm_password = null;
                $this->color = '#22bb33';
            }
            catch(Exception $e){
                $this->a = $e;
            }
            
        }
    }
    public function render()
    {
        return view('livewire.register');
    }
}
