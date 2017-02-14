<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    public function index ()
    {
        $data = [];
        return view('implicit', $data);
    }
}
