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
        return view("web.store", compact( 'products'));
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


    public function productDetail(Product $product)
    {
        return view('web.productDetail', compact('product'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return response()->json(['products' => []]); // No query, no results
    }

    // Search products by name or description
    $products = Product::where('name', 'like', '%' . $query . '%')
                       ->orWhere('description', 'like', '%' . $query . '%')
                       ->get();

    return response()->json(['products' => $products]);
}
    
}
