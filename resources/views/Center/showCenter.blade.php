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
                        <h2> Show Center</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('center.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Center Name:</strong>
                        <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $center->center_name }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Center No:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $center->center_no }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Branch No:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $center->branch_no }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Center Address:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="{{ $center->center_address }} ">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Province:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $center->center_province }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder=" {{ $center->center_city }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Postal Code:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="   {{ $center->center_postal }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Mobile Number:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $center->center_mobile }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telephone Number:</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="  {{ $center->center_land }}">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>E Mail :</strong>

                        <input type="text" name="branch_email" disabled class="form-control" placeholder="      {{ $center->center_email }}">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
