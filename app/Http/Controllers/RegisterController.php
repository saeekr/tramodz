<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use function Laravel\Prompts\password;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username'  => 'required|max:255|unique:users', //
            'email' => 'required|email|unique:users', //
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        //$request()->session()->flash('success', 'Registrasi anda berhasil, silahkan login.');

        return redirect('/')->with('success', 'Registrasi anda berhasil, silahkan login.');
    }
    // public function showUserProfile()
    // {
    //     $user = auth()->user();
    //     return view('profile', compact('user'));
    // }
    // public function show($id)
    // {
    //     $user = User::find($id);
    //     return view('profil')->with('users', $user);
    // }
    // public function edit($id)
    // {
    //     $user = User::find($id);
    //     return view('profil')->with('user', $user);
    // }


    // public function update(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     $input = $request->all();
    //     $user->update($input);
    //     return redirect('profil')->with('flash_message', 'Data telah diupdate!');
    // }

    public static function countUsers()
    {
        $totalUsers = User::where('is_admin', 0)->count();
        return $totalUsers;
    }
    public static function countAdmins()
    {
        $totalAdmin = User::where('is_admin', 1)->count();
        return $totalAdmin;
    }
}
