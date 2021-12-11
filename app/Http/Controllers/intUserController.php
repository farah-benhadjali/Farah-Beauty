<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intUserController extends Controller
{
    public function index()
    {
        return view('Layouts.intUser');
    }
}