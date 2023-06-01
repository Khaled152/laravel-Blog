<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthorChangePasswordForm extends Component
{
    public $current_password, $new_password , $confirm_new_password;

    public function ChangePassword(){
        $this->validate([
            'current_password'=>[
                'required',function($attribute,$value,$fail){
                    if(!Hash::check($value,User::find(auth('web')->id())->password)){
                        return $fail('Current Password is Invalid');
                    }
                },
            ],
            'new_password'=>'required|min:5|max:25',
            'confirm_new_password'=>'same:new_password'

        ],[
            'current_password.required'=>'Enter your Current Password',
            'new_password.required'=>'Enter your New Password',
            'new_password.min'=>'New Password Must be 5 Characters',
            'new_password.max'=>'New Password Must be 25 Characters',
            'confirm_new_password.same'=>'New Password And Confirm Password Must be Same'

        ]);
        $query=User::find(auth('web')->id())->update([
            'password'=>Hash::make($this->new_password)
        ]);
        if($query){
            //session()->flash('message','Password Changed Successfully');
            $this->showToastr('Password Changed Successfully','Success');
            $this->current_password=$this->new_password=$this->confirm_new_password=null;

        }else{
            $this->showToastr('something went wrong','error');
        }
    }

    public function showToastr($message,$type){
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=>$type,
            '$message'=>$message
        ]);
    }
    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
