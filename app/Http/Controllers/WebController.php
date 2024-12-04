<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;


class WebController extends Controller
{
    //
    public function index(){
        return view('web.index');
    }


    public function store(){

        $products = Product::all();
        return view('web.store',compact('products'));
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


    public function productdetail(Product $product){
        return view('web.productdetail', compact('product'));
    }
    
}
