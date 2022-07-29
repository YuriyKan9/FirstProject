<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function signup(){
        return view('signup');
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'first_name' => 'required|min:3|max:50',
            'second_name' => 'required|min:3|max:50',
            'email' => ['required','email'],
            'password' => 'required|confirmed|min:6',
            'city' => 'required',

        ]);
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        Auth::login($user);
        return redirect('/')->with('message','User created and logged in!');
    }

    public function login(){
        return view('login');
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);
        if(Auth::attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You are now logged in!');
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
}