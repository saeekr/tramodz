<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
        }

        if (auth()->attempt(array('username' => $credential['username'], 'password' => $credential['password']))) {
            if (auth()->user()->is_admin == 1) {
                return redirect('/dashboard');
            } else {
                $request->session()->regenerate();
                return redirect('/home');
            }
        } else {
            return back()->with('loginErr', 'Email atau username Tidak valid!');
        }

        return back()->with('loginErr', 'Email atau username Tidak valid!');

        dd('berhasil login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/tramodz');
    }
}
