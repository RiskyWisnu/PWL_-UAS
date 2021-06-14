<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //Pratikum 2
    public function services() {
        return view ('services');
    
    }
    public function news(){
        return view ('news');
    }
    public function product(){
        return view ('product');
    }
    public function program(){
        return view ('program');
    }
}
