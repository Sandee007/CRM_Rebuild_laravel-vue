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
                <h2> Show Branch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('branch.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Branch Name:</strong>
                <input type="text" name="branch_email" disabled class="form-control" placeholder=" {{ $branch->branch_name }}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Branch No:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $branch->branch_no }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $branch->branch_address }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Province:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $branch->branch_province }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $branch->branch_city }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postal Code:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $branch->branch_postal }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile Number:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $branch->branch_mobile }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone Number:</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $branch->branch_land }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E Mail :</strong>

                <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $branch->branch_email }}">
            </div>
        </div>
        </div>
        </div>
        </div>
@endsection
