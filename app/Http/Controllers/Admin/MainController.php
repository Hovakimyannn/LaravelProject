<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            $users = DB::table('users')->where('is_admin', '!=', 1)->get();
            return view('admin.index', ['users' => $users]);
        } else {
            return redirect()->back();
        }
    }

    public function remove(Request $request)
    {
        $userid = $request->getContent();
        $user = User::find($userid);
        $user->delete($userid);

        return response($user);
    }

    public function publicMessage(Request $request)
    {
        $text = $request->getContent();
        file_put_contents('storage/admin/publicMessage.txt', $text);
        return response($text);
    }
}
