
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
                        <h2>Create New Center</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('center.index') }}"> Back</a>
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
            <div class="modal-body">
                <form action="{{ route('center.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Name:</strong>
                                <input type="text" name="center_name" class="form-control" placeholder="Center Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center No:</strong>
                                <input type="text" name="center_no" class="form-control" value={{$centerCount}}
                                readonly
                                >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Branch Name:</strong>
                                {{-- <input type="text" name="branch_no" class="form-control" value={{$branches}}
                                readonly
                                > --}}
                                <select name="branch_no" class="form-control">
                                    @foreach($branches as $branch)
                                        <option value={{$branch->branch_name}}>
                                            Branch {{$branch->branch_name}}
                                        </option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Address:</strong>
                                <input type="text" name="center_address" class="form-control" placeholder="Center Address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Province:</strong>
                                {{-- <input type="text" name="center_province" class="form-control" placeholder="Center Province"> --}}
                                <select name="center_province" class="form-control">
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
                                <strong>Center City:</strong>
                                <input type="text" name="center_city" class="form-control" placeholder="Center City">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Postal:</strong>
                                <input type="text" name="center_postal" class="form-control" placeholder="Center Postal">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Mobile:</strong>
                                <input type="text" name="center_mobile" class="form-control" placeholder="Center Mobile">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Land :</strong>
                                <input type="text" name="center_land" class="form-control" placeholder="Center Land">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Center Emaill:</strong>
                                <input type="text" name="center_email" class="form-control" placeholder="Center Email">
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
    </div>





@endsection
