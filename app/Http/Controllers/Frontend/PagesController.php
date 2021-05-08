<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredProducts = Product::orderBy('id', 'desc')->where('is_featured', '1')->take(6)->get();

        $mobilePhones = Category::orderBy('id', 'desc')->where('parent_id', '1')->take(6)->get();

        return view ('frontend.pages.index', compact('featuredProducts', 'mobilePhones'));
    }


    public function search(Request $request){

        $search = $request->search;

        $products = Product::orWhere('title', 'like', '%'. $search . '%' )
        ->orWhere('description', 'like', '%'. $search . '%' )
        ->orWhere('slug', 'like', '%'. $search . '%' )
        ->orderBy('id', 'desc')->paginate(40);

        return view('frontend.pages.products.search', compact('search', 'products'));


    }
}
