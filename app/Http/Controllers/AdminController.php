<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Bisa tambahkan data statistik di sini
        return view('admin.dashboard');
    }
}