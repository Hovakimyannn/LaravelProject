<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function welcome()
    {
        if (!Auth::check()) {
            return view('welcome');
        } else {
            return redirect()->back();
        }
    }

    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('user.create');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'Registration passed');
        Auth::login($user);
        return view('user.userPage');
    }

    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('user.login');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success', 'You are logged');
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Incorrect login or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function changeUserImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image');
        $originalName = $path->getClientOriginalName();
        $employee = Auth::user();

        $employee->update([
            'userImage' => $originalName,
        ]);
        $path->storeAs('public/', "storage/$originalName");

        return  response()->json([
            'success' => "Image Upload Successfully",
            'uploaded_image' => "<img src='storage/$originalName' class='userImage' />",
        ]);
        //return redirect()->route('home');
    }
}
