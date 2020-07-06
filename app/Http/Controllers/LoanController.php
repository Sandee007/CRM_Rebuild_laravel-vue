<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;

class LoanController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::latest()->paginate(5);
        return view('Loans.indexLoan',compact('loans'))
                ->with('i',(request()->input('page',1)-1)*5);

    }
    public function addloan(){
        return view('admin.addLoan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Loans.addLoan');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'center_name'  => 'required',
        //     'center_no'  => 'required',
        //     'branch_no'  => 'required',
        //     'center_address'  => 'required',
        //     'center_province'  => 'required',
        //     'center_city'  => 'required',
        //     'center_postal'  => 'required',
        //     'center_mobile'  => 'required',
        //     'center_land'  => 'required',
        //     'center_email'  => 'required',

        // ]);

        Loan::create($request->all());

        return redirect()->route('Loans.index')
                        ->with('success','Loan created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        return view('Loans.showLoan',compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(Loans $loan)
    {
        return view('Loans.editLoan',compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        // $request->validate([
        //     'center_name'  => 'required',
        //     'center_no'  => 'required',
        //     'branch_no'  => 'required',
        //     'center_address'  => 'required',
        //     'center_province'  => 'required',
        //     'center_city'  => 'required',
        //     'center_postal'  => 'required',
        //     'center_mobile'  => 'required',
        //     'center_land'  => 'required',
        //     'center_email'  => 'required'
        // ]);

        $loan->update($request->all());

        return redirect()->route('loan.index')
                        ->with('success','Loan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loan.index')
                        ->with('success','Loan deleted successfully');

    }


}
