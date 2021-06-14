<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Pratikum 2
    public function news() {
        return view ('news');

    }
}
