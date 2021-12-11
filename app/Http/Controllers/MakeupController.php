<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeupController extends Controller
{
    public function index()
    {
        return view('Layouts.makeup');
    }
}