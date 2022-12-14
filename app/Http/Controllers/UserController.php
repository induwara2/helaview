<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    function register(){
        //validating the user input
        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|confirmed|min:5|max:20',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth('web')->login($user);

        return redirect("/user")->with("success","User account created");

    }

    function login(){
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if(auth('web')->attempt($attributes)){
            return redirect('/user')->with('success','Welcome again');
        }

        throw ValidationException::withMessages([
            'password' => 'Invalid Password !'
        ]);
    }

    function changePassword(){
        $attributes = request()->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:5|max:20',
        ]);

        $user = Auth::user('web');
        
       
        if(Hash::check( $attributes['old_password'],$user->password )){
            $attributes['password'] = bcrypt($attributes['password']);
            $user->password= $attributes['password'];
            $user->update();
            return redirect("/user")->with('success','Password updated');
        }else  {
            return redirect("/user")->with('error','Old password error');
        }      
        
    }

    function logout(){

        auth('web')->logout();

        return redirect("/")->with('success','Logged out !');
    }
}
