<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        return redirect("/")->with("success","User account created");

    }

    function login(){
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if(auth('web')->attempt($attributes)){
            return redirect('/')->with('success','Welcome again');
        }

        throw ValidationException::withMessages([
            'password' => 'Invalid Password !'
        ]);
    }

    function logout(){

        auth('web')->logout();

        return redirect("/")->with('success','Logged out !');
    }
}
