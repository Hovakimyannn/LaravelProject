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

    public function index()
    {
        $message = file_get_contents('storage/admin/publicMessage.txt');
        return match (Auth::check()) {
            true => Auth::user()->is_admin ? redirect()->route('admin.index') : view('user.userPage', ['message' => $message]),
            false => redirect()->route('login'),
        };
    }

    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('index');
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
            'userImage' => 'default.png',
        ]);
        session()->flash('success', 'Registration passed');
        Auth::login($user);
        return redirect()->route('index');
    }

    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('index');
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
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('index');
            }
        }
        return back()->with('error', 'Incorrect login or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function changeUserImage(Request $request)
    {
        $oldImage = $request->user()->userImage;
        $content = $request->getContent();
        $arr = explode(',', $content);
        $filename = uniqid() . $arr[0];
        if ($oldImage != 'default.png') {
            unlink("storage/$oldImage");
        }
        $string = $arr[2];
        $img = base64_decode($string);
        file_put_contents("storage/$filename", $img);
        $employee = Auth::user();
        $employee->update([
            'userImage' => $filename,
        ]);

        return response($filename);
    }

    public function message(Request $request)
    {
        $fileContent = file_get_contents('storage/admin/publicMessage.txt');
        $requestText = $request->getContent();
        if ($requestText == $fileContent) {
            return response(false);
        } else {
            return response($fileContent);
        }
    }
}
