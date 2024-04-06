<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
     return view('frontend.home');
    }

    // component functions 
    Public function Homepage_products(Request $request){
        dd("hello");
        return view("components.productcomponent");
    }
}
