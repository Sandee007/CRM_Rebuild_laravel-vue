<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\Branch;
use App\Center;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{

    public function index()
    {

        // borrowers count
        $borrowersCount = count(Borrower::all());
        $borrowersCount++;

        // get branches
        $branches = Branch::all();
        // get centers
        $centers = Center::all();

//       return view('Borrower.borrowerindex');
        $borrowers = Borrower::latest()->paginate(5);
        return view('Borrower.borrowerindex',compact('borrowers', 'borrowersCount', 'branches','centers'))
            ->with('i',(request()->input('page',1)-1)*5);

        
    }

    public function create()
    {

    }

    public function store(Request $request){

        // $request->validate([

        // 'application_no'  => 'required',
        // 'branch' => 'required',
        // 'branch_no' => 'required',
        // 'center' => 'required',
        // 'group_no'  => 'required',
        // 'borrower_no'  => 'required',
        // 'full_name' => 'required',
        // 'nic' => 'required',
        // 'birthday' => 'required',
        // 'address' => 'required',
        // 'lp_no' => 'required',
        // 'mobile_no' => 'required',
        // 'email' => 'required',
        // 'occupation' => 'required',
        // 'requested_amount' => 'required',
        // 'duration_weeks' => 'required',
        // 'loan_stage' => 'required'
        // ]);

        Borrower::create($request->all());

        return redirect()->route('borrower.index')
            ->with('success','Borrower created successfully.');
    }


    public function show(Borrower $borrower)
    {
        return view('Borrower.viewborrower',compact('borrower'));
    }


    public function edit(Borrower $borrower)
    {
        return view('Borrower.editborrower',compact('borrower'));;
    }


    public function update(Request $request, Borrower $borrower)
    {
        //
    }

    public function destroy(Borrower $borrower)
    {
        $borrower->delete();

        return redirect()->route('borrower.index')
                        ->with('success','Branch deleted successfully');
    }
}
