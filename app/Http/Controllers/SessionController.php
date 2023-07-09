<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{
    function index()
    {     
         return view("login");
    }

    function login(Request $request)
    {
        $getData = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($getData)) {
            $user = User::find(Auth::id());
            return view('landingpage', compact('user'));
        } else {
            dd($getData);
            return 'gagal';
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/main');
    }
}
