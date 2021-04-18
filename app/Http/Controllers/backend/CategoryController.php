<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name' , 'asc')->get();
        return view('backend.pages.category.manage' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::orderBy('name' , 'asc')->where('parent_id' , 0)->get();
        return view('backend.pages.category.create' , compact('parent_categories'));
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
            'cat_name'  => 'required|max:255',
        ],
        [
            'cat_name.required'     => 'Please Insert a Caregory Name',
        ]);

        // Store a Category in DB
        $category = new Category();
        $category->name             = $request->cat_name;
        $category->slug             = Str::slug($request->cat_name);
        $category->description      = $request->cat_description;
        $category->parent_id        = $request->parent_id;

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/category/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

        $category->save();

        // Write Flash Message

        return redirect()->route('manageCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category , $id)
    {
        $parent_categories = Category::orderBy('name' , 'asc')->where('parent_id' , 0)->get();
        $category = Category::find($id);
        if(!is_null($category)) {
            return view('backend.pages.category.edit' , compact('parent_categories' , 'category'));
        } else {
        return route('manageCategory');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category , $id)
    {
        $request->validate([
            'cat_name'  => 'required|max:255',
        ],
        [
            'cat_name.required'     => 'Please Insert a Caregory Name',
        ]);

        // Store a Category in DB
        $category = Category::find($id);
        $category->name             = $request->cat_name;
        $category->slug             = Str::slug($request->cat_name);
        $category->description      = $request->cat_description;
        $category->parent_id        = $request->parent_id;

        if ( $request->image )
        {
            //delete old image

            if(File::exists('img/category' . $category->image)) {
                File::delete('img/category' . $category->image);
            }

            //upload new image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/category/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

        $category->update();

        // Write Flash Message

        return redirect()->route('manageCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category , $id)
    {
        $category = Category::find($id);

        if(!is_null($category)){
            if($category->parent_id == 0){
                $sub_cat = Category::orderBy('name' , 'asc')->where('parent_id' , $category->id)->get();

                foreach($sub_cat as $sub) {
                    if(File::exists('img/category' . $category->image)) {
                        File::delete('img/category' . $category->image);
                    }
                    $sub->delete();
                }
            }
            if(File::exists('img/category' . $category->image)) {
                File::delete('img/category' . $category->image);
            }
        $category->delete();

        }
        return redirect()->route('manageCategory');

    }
}
 