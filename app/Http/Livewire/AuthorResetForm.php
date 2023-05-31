<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthorResetForm extends Component
{
    public $email, $token, $new_password, $confirm_password;

    public function mount(){
        $this->email = request()->email;
        $this->token = request()->token;
    }



    public function ResetHandler(){
        $this->validate([
            'email'=>'required|email|exists:users,email',
           'new_password'=>'required|min:5',
           'confirm_password'=>'same:new_password',
      ],[
            'email.required'=>'Enter your email address',
           'email.email'=>'Invaild email address',
            'email.exsists'=>'this email is not registered',
           'new_password.required'=>'Enter new Password',
           'new_password.min'=>'Minimun character must be 5',
           'confirm_password'=>'the confirm new password and new password must match',
       ]);
        $check_token = DB::table('password_resets')->where([
            'email'=>$this->email,
            'token'=>$this->token,
        ])->first();
        if(!$check_token){
            session()->flash('fail','Invaild Token');
        }else{
            User::where('email', $this->email)->update([
                'password'=>Hash::make($this->new_password)
            ]);
            DB::table('password_resets')->where([
                'email'=>$this->email
                ])->delete();
                $success_token=Str::random(64);
                session()->flash('success','your password has been updated');
                $this->redirectRoute('author.login',['tkn'=>$success_token,'UEmail'=>$this->email]);
        }
    }
    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
