@extends('layouts.master')

@section('title')

    Canty International
@endsection

@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Borrower</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('borrower.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Branch:</label>
                            <input type="text" class="form-control" placeholder="" name="branch">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Branch :</label>
                            <select name="branch_no" id="select-branch" onclick="genId()" class="form-control">
                                @foreach($branches as $branch)
                                    <option value={{$branch->branch_no}}>
                                        Branch {{$branch->branch_no}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Center :</label>
                            <select name="center" id="select-center" onclick="genId()" class="form-control">
                                @foreach($centers as $center)
                                    <option value={{$center->center_no}}>
                                        Center {{$center->center_no}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Group No:</label>
                            {{-- <input type="text" class="form-control" name="group_no"> --}}
                            <select name="group_no" class="form-control">
                                <option value="Group 1">Group 1</option>
                                <option value="Group 2">Group 2</option>
                                <option value="Group 3">Group 3</option>
                                <option value="Group 4">Group 4</option>
                                <option value="Group 5">Group 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Application No:</label>
                            <input type="text" class="form-control" name="application_no">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Unique Id:</label>
                            <input type="hidden" id="borrowersCount" value={{$borrowersCount}} >
                            <input type="text" class="form-control" name="borrower_no" id="uniId" readonly>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Full Name:</label>
                            <input type="text" class="form-control" name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NIC:</label>
                            <input type="text" class="form-control" name="nic">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Birthday:</label>
                            <input type="text" class="form-control" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">LP:</label>
                            <input type="text" class="form-control" name="lp_no">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile :</label>
                            <input type="text" class="form-control" name="mobile_no">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">E mail:</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Loan Category:</label>
                            {{-- <input type="text" class="form-control" name="occupation"> --}}
                            <select name="occupation" class="form-control" >
                                <option value="Self Employeed">Self Employeed</option>
                                <option value="Occupation">Occupation</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Amount:</label> --}}
                            <input type="hidden" value=123 class="form-control" name="requested_amount">
                        {{-- </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Duration(weeks) :</label> --}}
                            <input type="hidden" value="abc" class="form-control" name="duration_weeks">
                        {{-- </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Loan Stage :</label> --}}
                            <input type="hidden" value="abc" class="form-control" name="loan_stage">
                        {{-- </div> --}}



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit"  class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>





    <div class="container">
        <div class="card">
            <div   class="card-body">
                <div class="row">
                    <div class="col-lg-12 borrower_id">
                        <div class="pull-left">
                            <h2>Borrowers</h2>

                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Add New Borrower</button>
{{--                            <a class="btn btn-success" href="{{ route('borrower.create') }}"> Add New Borrower</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th> Mobile</th>
                    <th> Amount</th>
                    <th> Status</th>

                    <th width="200px">Action</th>
                </tr>
                @foreach ($borrowers as $borrower)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $borrower->borrower_no }}</td>
                        <td>{{ $borrower->full_name }}</td>
                        <td>{{ $borrower->mobile_no }}</td>
                        <td>{{ $borrower->requested_amount  }}</td>
                        <td>{{ $borrower->loan_stage }}</td>

                        <td width = "10px">
                            <form
                                action="{{ route('borrower.destroy',$borrower->id) }}" method="POST"   >


                                <a class="btn btn-info" href="{{ route('borrower.show',$borrower->id) }}">Show</a>
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Show</button>--}}


                                <a class="btn btn-primary" href="{{ route('borrower.edit',$borrower->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
    </div>
{{--    {!! $borrower->links() !!}--}}
<script>
    const branch = document.querySelector('#select-branch');
    const center = document.querySelector('#select-center');
    const borrowersCount = document.querySelector('#borrowersCount');
    const uniId = document.querySelector('#uniId');

    setInterval(() => {
        genId();
    }, 50);

    function genId(){

        let branchString = `00${branch.value}`
        branchString = branchString.slice(branchString.length-3,branchString.length);
        console.log(branchString);

        let centerString = `00${center.value}`;
        centerString = centerString.slice(centerString.length-3,centerString.length);

        let borrowerString = `00${borrowersCount.value}`;
        borrowerString = borrowerString.slice(borrowerString.length-3,borrowerString.length);

        let id = `${branchString}${centerString}${borrowerString}`
        console.log(id);
        uniId.value = id;

    }


</script>

@endsection

@section('scripts')

@endsection
