<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\courses;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('q');

    $results = courses::where('title', 'like', "%{$keyword}%")
                ->orWhere('description', 'like', "%{$keyword}%")
                ->get();

    return view('search.result', compact('results', 'keyword'));
}
    //
}
