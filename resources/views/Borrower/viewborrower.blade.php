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
                <h2> Branch:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('borrower.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Branch No:</strong>
                <input type="text" name="branch_no" disabled class="form-control" placeholder=" {{ $borrower->branch_no }}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Center:</strong>

                <input type="text" name="center" disabled class="form-control" placeholder="{{ $borrower->center }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group No:</strong>

                <input type="text" name="group_no" disabled class="form-control" placeholder="{{ $borrower->group_no }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Application No:</strong>

                <input type="text" name="application_no" disabled class="form-control" placeholder="{{ $borrower->application_no }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unique Id:</strong>

                <input type="text" name="borrower_no" disabled class="form-control" placeholder="{{ $borrower->borrower_no }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>

                <input type="text" name="full_name" disabled class="form-control" placeholder="{{ $borrower->full_name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIC:</strong>
        
                <input type="text" name="nic" disabled class="form-control" placeholder="  {{ $borrower->nic }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthday:</strong>
        
                <input type="text" name="birthday" disabled class="form-control" placeholder="  {{ $borrower->birthday }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>

                <input type="text" name="address" disabled class="form-control" placeholder="  {{ $borrower->address }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LP:</strong>

                <input type="text" name="lp_no" disabled class="form-control" placeholder="  {{ $borrower->lp_no }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile :</strong>

                <input type="text" name="mobile_no" disabled class="form-control" placeholder="{{ $borrower->mobile_no }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E mail::</strong>

                <input type="text" name="email" disabled class="form-control" placeholder="{{ $borrower->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Occupation:</strong>

                <input type="text" name="occupation" disabled class="form-control" placeholder="{{ $borrower->occupation }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>

                <input type="text" name="requested_amount" disabled class="form-control" placeholder="  {{ $borrower->requested_amount }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration(weeks):</strong>

                <input type="text" name="duration_weeks" disabled class="form-control" placeholder="  {{ $borrower->duration_weeks }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Loan Stage:</strong>

                <input type="text" name="loan_stage" disabled class="form-control" placeholder="  {{ $borrower->loan_stage }}">
            </div>
        </div>
        </div>
        </div>
        </div>



@endsection

@section('scripts')

@endsection
