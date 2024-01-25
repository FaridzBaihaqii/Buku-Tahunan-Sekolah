<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        return view('visi');
    }
}
