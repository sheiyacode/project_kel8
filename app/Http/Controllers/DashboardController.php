<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller

{
    public function index()
    {
        $user = auth::user();

        if ($user->role === 'admin') {
            return view('dashboard.admin');
        } elseif ($user->role === 'user') {
            return view('dashboard.user');
        } elseif ($user->role === 'tuton') {
            return view('dashboard.tuton');
        } else {
            abort(403, 'Role tidak dikenali.');
        }
    }
    //
}
