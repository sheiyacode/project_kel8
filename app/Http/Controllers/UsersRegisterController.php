<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UsersRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // pastikan buat view ini
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'subscription' => ['in:free,lite,standard','pro'], // optional, default free
            'phone' => ['string', 'max:20'],
            'address' => ['string'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'subscription' => $request->subscription ?? 'free',
            'phone' => $request->phone,
            'address' => $request->address,
            'email_verified_at' => now(),
        ]);

        auth()->login($user);

        return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang ' . $user->name);
    }
}
