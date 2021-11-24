<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name'=>'required|min:2|max:20',
          'email'=>'required|email|unique:users',
          'password'=>'required|confirmed',
        ]);

        $user = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
        ]);
        session()->flash('success','Registration passed');
        Auth::login($user);
        return view('user.mainPage');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
           'email'=>'required|email',
           'password'=>'required',
        ]);

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]))
        {
            session()->flash('success','You are logged');
            return redirect()->home();
        }
        return redirect()->back()->with('error','Incorrect login or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
