<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsisController extends Controller
{
    public function index()
    {
        return view('sambutan.osis');
    }

}
