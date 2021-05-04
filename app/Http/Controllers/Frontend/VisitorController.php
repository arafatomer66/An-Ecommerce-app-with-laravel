<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;
use Visitor;
use Auth;
use Image;
use File;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.visitor.manage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $visitor = Auth('visitor')->user();

        return view ('frontend.pages.visitor.edit', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $visitor = Auth('visitor')->user();

        $this->validate($request, [
            'name'      => 'required|string|max:30',
            'email'     => 'required|string|max:30',
            'phone'     => 'required|string|max:11',
            'address'   => 'required|string|max:40',
        ]);

        $visitor->name              = $request->name;
        $visitor->email             = $request->email;
        $visitor->phone             = $request->phone;
        $visitor->address           = $request->address;
        $visitor->ip_address        = request()->ip();

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/visitors/' . $img);
            Image::make($image)->save($location);
            $visitor->image = $img;
        }

        $visitor->save();

        return redirect()->route('myAccount');



    }

}
