<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class BrandController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // We Are Not Using This Show Function
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validation
        $request->validate([
            'brand_name'  => 'required|max:255',
        ],
        [
            'brand_name.required'     => 'Please Insert a Brand Name',
        ]);

        // Store a Brand in DB
        $brand = new Brand();
        $brand->name             = $request->brand_name;
        $brand->slug             = Str::slug($request->brand_name);
        $brand->description      = $request->brand_description;

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();

        // Write Flash Message

        return redirect()->route('manageBrand');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);

        if ( !is_null($brand) ){
            return view('backend.pages.brand.edit', compact('brand'));
        }
        else{
            return route('manageBrand');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form Validation
        $request->validate([
            'brand_name'                => 'required|max:255',
        ],
        [
            'brand_name.required'       => 'Please Insert a Caregory Name',
        ]);

        // Update a Brand in DB
        $brand = Brand::find($id);
        $brand->name             = $request->brand_name;
        $brand->slug             = Str::slug($request->brand_name);
        $brand->description      = $request->brand_description;

        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('img/brand/' . $brand->image ) ){
                File::delete('img/brand/' . $brand->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();

        return redirect()->route('manageBrand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);

        if ( !is_null($brand) ){
            // Delete Brand Image
            if ( File::exists('img/brand/' . $brand->image ) ){
                        File::delete('img/brand/' . $brand->image);
            }
            $brand->delete();
        }
        return redirect()->route('manageBrand');
    }
}
