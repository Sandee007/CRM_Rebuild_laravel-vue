@extends('layouts.master')
@section('title')

    Canty International
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div   class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Branch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('borrower.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
            <form action="{{ route('borrower.update',$borrower->id) }}" method="POST">
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch :</strong>
                            <input type="text" name="branch" value="{{ $borrower->branch }}" class="form-control" placeholder="Branch">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch No:</strong>
                            <input type="text" name="branch_no" value="{{ $borrower->branch_no }}" class="form-control" placeholder="Branch No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Center:</strong>
                            <input type="text" name="center" value="{{ $borrower->center }}" class="form-control" placeholder="Center">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Group No:</strong>
                            <input type="text" name="group_no" value="{{ $borrower->group_no }}" class="form-control" placeholder="Group No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Application No:</strong>
                            <input type="text" name="application_no" value="{{ $borrower->application_no }}" class="form-control" placeholder="Application No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Unique Id:</strong>
                            <input type="text" name="borrower_no" value="{{ $borrower->borrower_no }}" class="form-control" placeholder="Unique Id">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Full NAme:</strong>
                            <input type="text" name="full_name" value="{{ $borrower->full_name }}" class="form-control" placeholder="Branch Mobile">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>NIC :</strong>
                            <input type="text" name="nic" value="{{ $borrower->nic }}" class="form-control" placeholder="NIC">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Birthday:</strong>
                            <input type="text" name="birthday" value="{{ $borrower->birthday }}" class="form-control" placeholder="Birthday">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="address" value="{{ $borrower->address }}" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>LP:</strong>
                            <input type="text" name="lp_no" value="{{ $borrower->lp_no }}" class="form-control" placeholder="LP">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mobile:</strong>
                            <input type="text" name="mobile_no" value="{{ $borrower->mobile_no }}" class="form-control" placeholder="Branch Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>E Mail:</strong>
                            <input type="text" name="email" value="{{ $borrower->email }}" class="form-control" placeholder="E Mail">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Occupation:</strong>
                            <input type="text" name="occupation" value="{{ $borrower->occupation }}" class="form-control" placeholder="Occupation">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" name="requested_amount" value="{{ $borrower->requested_amount }}" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Duration(weeks):</strong>
                            <input type="text" name="duration_weeks" value="{{ $borrower->duration_weeks }}" class="form-control" placeholder="Duration(weeks)">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Loan Stage:</strong>
                            <input type="text" name="loan_stage" value="{{ $borrower->loan_stage }}" class="form-control" placeholder="Loan Stage">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection