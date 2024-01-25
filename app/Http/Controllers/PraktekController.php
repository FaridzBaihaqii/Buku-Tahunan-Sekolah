<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktekController extends Controller
{
    public function index()
    {
        return view('gallery.praktek');
    }
}
