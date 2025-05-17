<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Picker extends Controller
{
    public function showForm()
    {
        return view('pick');
    }
}
