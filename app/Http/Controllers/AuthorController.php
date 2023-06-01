<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;

class AuthorController extends Controller
{


    public function index(Request $req){
        return view('back.pages.home');
    }


    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('author.logout');
    }


    public function ResetForm(Request $request , $token =null){
        $data=[
            'pageTitle'=>'Reset Password'
        ];
        return view('back.pages.auth.reset',$data)->with(['token'=>$token,'email'=>$request->email]);
    }


    public function changeProfilePicture(Request $request){
        $user = User::find(auth('web')->id());
        $path= 'back/dist/imgs/authors/';
        $file=$request->file('file');
        $old_picture=$user->getAttributes()['picture'];
        $file_path= $path.$old_picture;
        $new_picture_name='AIMG'.$user->id.time().rand(1,100000).'.jpg';

        if($old_picture !=null && File::exists(public_path($file_path))){
            File::delete(public_path($file_path));
        }

        $upload = $file->move(Public_path($path),$new_picture_name);
        if($upload){
            $user->update([
                'picture'=>$new_picture_name,
            ]);

            return response()->json(['status'=>1,'msg'=>'Your profile picture has been successfully updated']);
        }else{
            return response()->json(['status'=>0,'msg'=>'something went wrong']);
        }
    }
}
