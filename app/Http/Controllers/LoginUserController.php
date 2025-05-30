<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginUserController extends Controller
{
    public function showLoginFormUser()
    {
        return view('user.auth.login_user');
    }

    public function login(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    $user = User::where('email', $request->email)->first();

    // Cek user ada dan password cocok
    if ($user && Hash::check($request->password, $user->password)) {
        Auth::login($user); // login
        return redirect()->route('dashboarduser.index')->with('success', 'Berhasil login!');
    }

    // Gagal login
    return back()->withErrors(['email' => 'Email atau password salah'])->withInput();

    }
    //
}
