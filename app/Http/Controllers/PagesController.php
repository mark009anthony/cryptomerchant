<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function online(){

	return view ('online-payment');

    }

    public function invoice(){

 	return view ('invoice');  	
    }
    

    public function faq(){

 	return view ('faq');  	
    }

    public function contact(){

 	return view ('contact');  	
    }
}
