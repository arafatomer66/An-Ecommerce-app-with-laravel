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

        // var_dump($mobilePhones);
        // exit();

        return view ('frontend.pages.index', compact('featuredProducts', 'mobilePhones'));
    }
}
