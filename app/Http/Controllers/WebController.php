<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class WebController extends Controller
{
    //
    public function index(){
        return view('web.index');
    }


    public function store(){
        return view('web.store');
    }

    public function about(){
        return view('web.about');
    }

    public function contact(){
        return view('web.contact');
    }


    public function cart(){
        return view('web.cart');
    }

    public function checkout(){
        return view('web.checkout');
    }


    public function productdetail(){
        return view('web.productdetail');
    }
    
}
