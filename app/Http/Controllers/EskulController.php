<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index()
    {
        return view('gallery.eskul');
    }
}
