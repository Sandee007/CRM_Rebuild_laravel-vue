<?php

namespace App\Http\Controllers\Center;

use App\Center;
use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = Center::latest()->paginate(5);
        return view('Center.indexCenter',compact('centers'))
                ->with('i',(request()->input('page',1)-1)*5);

    }
    public function addcenter(){
        return view('admin.addCenter');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centerCount = count(Center::all());
        if($centerCount){
            $centerCount++;
        } else{
            $centerCount = 1;
        }

        $branches = Branch::all();
        
        return view('Center.addCenter', compact('centerCount', 'branches'));
        // ->with('centerCount', $centerCount);
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

            'center_name'  => 'required',
            'center_no'  => 'required',
            'branch_no'  => 'required',
            'center_address'  => 'required',
            'center_province'  => 'required',
            'center_city'  => 'required',
            'center_postal'  => 'required',
            'center_mobile'  => 'required',
            'center_land'  => 'required',
            'center_email'  => 'required',

        ]);

        Center::create($request->all());

        return redirect()->route('center.index')
                        ->with('success','Branch created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        return view('Center.showCenter',compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(Center $center)
    {
        return view('Center.editCenter',compact('center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Center $center)
    {
        $request->validate([
            'center_name'  => 'required',
            'center_no'  => 'required',
            'branch_no'  => 'required',
            'center_address'  => 'required',
            'center_province'  => 'required',
            'center_city'  => 'required',
            'center_postal'  => 'required',
            'center_mobile'  => 'required',
            'center_land'  => 'required',
            'center_email'  => 'required'
        ]);

        $center->update($request->all());

        return redirect()->route('center.index')
                        ->with('success','Branch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Center $center)
    {
        $center->delete();

        return redirect()->route('center.index')
                        ->with('success','Branch deleted successfully');

    }
}
