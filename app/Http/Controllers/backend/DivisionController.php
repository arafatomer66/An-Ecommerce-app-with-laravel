<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Division;
use App\Models\backend\District;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::orderBy('priority', 'asc')->get();
        return view('backend.pages.division.manage', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:255',
            'priority'       => 'required',
        ],
        [
            'name'     => 'Please Provide Valid Division Name',
            'priority'       => 'Please Set a Priority Number to Show on Screen',
        ]);

        $division = new Division();
        $division->name         = $request->name;
        $division->priority     = $request->priority;
        $division->save();

        return redirect()->route('manageDivision');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::find($id);
        if ( !is_null($division) ){
            return view('backend.pages.division.edit', compact('division'));
        }
        else{
            return view('backend.pages.division.manage');
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
         // Validate the Division Field
         $request->validate([
            'name'     => 'required|max:255',
            'priority'       => 'required',
        ],
        [
            'name'     => 'Please Provide Valid Division Name',
            'priority'       => 'Please Set a Priority Number to Show on Screen',
        ]);

        $division = Division::find($id);
        $division->name         = $request->name;
        $division->priority     = $request->priority;

        $division->save();

        return redirect()->route('manageDivision');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        if ( !is_null($division) ){
            $districts = District::where('division_id', $division->id)->get();
            foreach( $districts as $district ){
                $district->delete();
            }
            $division->delete();
        }

        return redirect()->route('manageDivision');
    }
}
