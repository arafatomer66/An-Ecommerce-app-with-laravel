<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;

class WebProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = Product::orderBy('id', 'desc')->paginate(20);
        return view ('frontend.pages.products.index', compact('allProducts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $productDetails = Product::where('slug', $slug)->first();

        if ( !is_null($productDetails) )
        {
            return view('frontend.pages.products.show', compact('productDetails'));
        }
        else{
            return redirect()->route('productDetails');
        }
    }

}
