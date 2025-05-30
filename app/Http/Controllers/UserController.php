<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard() {
        return view('user.dashboard');
    }

    public function courses() {
        return view('user.content.courses');
    }

    public function quiz() {
        return view('user.content.quiz');
    }

    public function certificate() {
        return view('user.content.certificate');
    }

    public function profile() {
        return view('user.content.profile');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
