<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //pratikum 2
    public function index() {
        return view ('index');
    }
}
