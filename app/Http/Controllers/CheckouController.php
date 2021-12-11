<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckouController extends Controller
{
    public function index()
    {
        return view('Layouts.checkout');
    }
}
