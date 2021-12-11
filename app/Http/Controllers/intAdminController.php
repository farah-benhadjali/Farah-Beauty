<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intAdminController extends Controller
{
    public function index()
    {
        return view('Layouts.intAdmin');
    }
}