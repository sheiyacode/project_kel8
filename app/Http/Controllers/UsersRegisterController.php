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
        return view('user.auth.reguser'); // pastikan buat view ini
    }

    public function register(Request $request)
    {
        //dd($request->all(),
        //'password' => $request->password,
        //'password_confirmation' => $request->password_confirmation,
    //);
    
        $validator = Validator::make($request->all(), [
            
            'full_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'in:pria,wanita'],
            'tanggal_lahir' => ['nullable', 'date'],
            'nomor_telepon' => ['nullable', 'string', 'max:20'],
            /**'setuju_terms' => ['accepted'],*/
        ]);

        if ($validator->fails()) {
            //dd($validator->errors()->all());
            return back()->withErrors($validator)->withInput();
        }

         User::create([
            
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_telepon' => $request->nomor_telepon,
            //'address' => $request->address
            /**'setuju_terms' => $request->has('setuju_terms'),*/
        ]);

        //auth()->login($user);

        return redirect()->route('login_user')
        ->with('success', 'Registrasi berhasil! Silakan login terlebih dahulu.');
        //return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang ' . $user->name);
    }
}
