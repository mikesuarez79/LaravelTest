<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function index()
    {
        // echo something or call a view
        return view('search');
        // return "welcome and your number is ". $id;
    }
}
