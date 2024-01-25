<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeragamController extends Controller
{
    public function index()
    {
        return view('gallery.seragam');
    }
}
