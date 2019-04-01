<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // details pages [not crud]
    public function home(){ return view('welcome'); }
    public function profile(){ return view('profile'); }
}
