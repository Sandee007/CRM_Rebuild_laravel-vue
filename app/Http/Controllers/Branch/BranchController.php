<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Branch;
use App\Center;
class BranchController extends Controller
{
    // public function branches(){

    //     $users =User::all();
    //     return view('home')->with('users',$users);
    // }
// -------------------------------------------------Branches are ging throw this index()-----------------------------------------------------------------------
    
    public function index()
    {
        $branches = Branch::latest()->paginate(5);
        return view('Branch.indexBranch',compact('branches'))
                ->with('i',(request()->input('page',1)-1)*5);
    }
    
    
// -------------------------------------------------Branches are change in this destroy()-----------------------------------------------------------------------

    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index')
                        ->with('success','Branch deleted successfully');

    }
    
    
// -------------------------------------------------A Branch View Showe Using This show()-----------------------------------------------------------------------
 
    public function show(Branch $branch)
    {
        return view('Branch.showBranch',compact('branch'));
    }
    
    
// -------------------------------------------------Branches Edit View Show Using This edit()-----------------------------------------------------------------------

    public function edit(Branch $branch)
    {
        return view('Branch.editBranch',compact('branch'));
    }

    
    
// -------------------------------------------------Branches are Edit use this edit()-----------------------------------------------------------------------

    public function create()
    {
        // $maxValue = Branch::max('id');
        // $branch_no = $maxValue;
        $branchCount = count(Branch::all());
        if($branchCount){
            $branchCount++;
        } else{
            $branchCount = 1;
        }
        return view('Branch.addBranch')->with('branchCount', $branchCount);
    }
    
    
// -------------------------------------------------A Branch Create Using This store()-----------------------------------------------------------------------

    public function store(Request $request)
    {
        $request->validate([

            'branch_name' => 'required',
            'branch_no' => 'required',
            'branch_address' => 'required',
            'branch_province' => 'required',
            'branch_city' => 'required',
            'branch_postal' => 'required',
            'branch_mobile' => 'required',
            'branch_land' => 'required',
            'branch_email'  => 'required',

        ]);

        Branch::create($request->all());

        //storing in centers too
        // $center = new Center;
        // $center->center_name = $request->input('branch_name');
        // $center->branch_no = $request->input('branch_no');

        // // get number of centers
        // $branchCount = count(Center::all());
        // if($branchCount){
        //     $branchCount++;
        // } else{
        //     $branchCount = 1;
        // }
        // $center->center_no = $branchCount;
        // $center->save();


        return redirect()->route('branch.index')
                        ->with('success','Branch created successfully.');

    }
    
    
// -------------------------------------------------A Branch Update Using This update()-----------------------------------------------------------------------

    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'branch_name' => 'required',
            'branch_no' => 'required',
            'branch_address' => 'required',
            'branch_province' => 'required',
            'branch_city' => 'required',
            'branch_postal' => 'required',
            'branch_mobile' => 'required',
            'branch_land' => 'required',
            'branch_email'  => 'required',
        ]);

        $branch->update($request->all());

        return redirect()->route('Branch.index')
                        ->with('success','Branch updated successfully');
    }
}
