<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*
    public function contacus() {
        return view ('contact-us')
            ->with ('url','https://www.educastudio.com/contact-us');
    }
 */   
    // Pratikum 2
    public function contact() {
        return view ('contact');

    }
}
