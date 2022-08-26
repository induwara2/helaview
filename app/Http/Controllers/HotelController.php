<?php

namespace App\Http\Controllers;

use App\Models\HotelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class HotelController extends Controller
{
    function register(){
        //validating the user input
        $attributes = request()->validate([
            'email' => 'required|email|unique:hotel_users,email',
            'name' => 'required',
            'password' => 'required|confirmed|min:5|max:20',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = HotelUser::create($attributes);

        auth('hoteluser')->login($user);

        return redirect("/hoteluser")->with("success","User account created");

    }

    function login(){
        $attributes = request()->validate([
            'email' => 'required|email|exists:hotel_users,email',
            'password' => 'required'
        ]);

        if(auth('hoteluser')->attempt($attributes)){
            return redirect('/hoteluser')->with('success','Welcome again');
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

        $user = Auth::user('hoteluser');
        
       
        if(Hash::check( $attributes['old_password'],$user->password )){
            $attributes['password'] = bcrypt($attributes['password']);
            $user->password= $attributes['password'];
            $user->update();
            return redirect("/hoteluseruser")->with('success','Password updated');
        }else  {
            return redirect("/hoteluseruser")->with('error','Old password error');
        }      
        
    }

    function logout(){

        auth('hoteluser')->logout();

        return redirect("/hotellogin")->with('success','Logged out !');
    }
}
