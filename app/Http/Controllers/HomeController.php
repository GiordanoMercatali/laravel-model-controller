<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::orderBy('title')->get();
        return view('welcome', compact('movies'));
    } 
}