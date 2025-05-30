<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginTutorController extends Controller
{
    public function showLoginFormTutor()
{
    return view('tutor.auth.login_tutor');
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
        return redirect()->route('dashboardtutor')->with('success', 'Berhasil login!');
    }

    // Gagal login
    return back()->withErrors(['email' => 'Email atau password salah'])->withInput();

    }
    //
}