
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
                        <h2>Create New Branch</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('branch.index') }}"> Back</a>
                    </div>
                </div>
            </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Please check your input code<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('branch.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Name:</strong>
                                <input type="text" name="branch_name"  class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch No:</strong>
                                <input type="text" name="branch_no" class="form-control" value={{$branchCount}}
                                readonly
                                >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Address:</strong>
                                <input type="text" name="branch_address" class="form-control" placeholder="Branch Address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Province:</strong>
                                {{-- <input type="text" name="branch_province" class="form-control" placeholder="Branch Province"> --}}
                                <select name="branch_province" class="form-control">
                                    <option value="Central Province">Central Province</option>
                                    <option value="Eastern Province">Eastern Province</option>
                                    <option value="Northern Province">Northern Province</option>
                                    <option value="Southern Province">Southern Province</option>
                                    <option value="Western Province">Western Province</option>
                                    <option value="North Western Province">North Western Province</option>
                                    <option value="North Central Province">North Central Province</option>
                                    <option value="Uva Province">Uva Province</option>
                                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch City:</strong>
                                <input type="text" name="branch_city" class="form-control" placeholder="Branch City">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postal Code:</strong>
                                 <input type="text" name="branch_postal" class="form-control" placeholder="Branch Postal">
{{--                                <select name="branch_postal" class="form-control">--}}
{{--                                    <option value="Group 1">Group 1</option>--}}
{{--                                    <option value="Group 2">Group 2</option>--}}
{{--                                    <option value="Group 3">Group 3</option>--}}
{{--                                    <option value="Group 4">Group 4</option>--}}
{{--                                    <option value="Group 5">Group 5</option>--}}
{{--                                </select>--}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Mobile:</strong>
                                <input type="text" name="branch_mobile" class="form-control" placeholder="Branch Mobile">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Land :</strong>
                                <input type="text" name="branch_land" class="form-control" placeholder="Branch Land">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Email:</strong>
                                <input type="" name="branch_email" class="form-control" placeholder="Branch Email">
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
