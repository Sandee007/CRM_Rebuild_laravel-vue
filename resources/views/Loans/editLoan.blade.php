@extends('layouts.master')

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
                <a class="btn btn-primary" href="{{ route('branch.index') }}"> Back</a>
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
  
            <form action="{{ route('branch.update',$branch->id) }}" method="POST">
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch Name:</strong>
                            <input type="text" name="branch_name" value="{{ $branch->branch_name }}" class="form-control" placeholder="Branch Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch No:</strong>
                            <input type="text" name="branch_no" value="{{ $branch->branch_no }}" class="form-control" placeholder="Branch No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="branch_address" value="{{ $branch->branch_address }}" class="form-control" placeholder="Branch Address">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Province:</strong>
                            <input type="text" name="branch_province" value="{{ $branch->branch_province }}" class="form-control" placeholder="Branch Province">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>City:</strong>
                            <input type="text" name="branch_city" value="{{ $branch->branch_city }}" class="form-control" placeholder="Branch City">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Postal Code:</strong>
                            <input type="text" name="branch_postal" value="{{ $branch->branch_postal }}" class="form-control" placeholder="Branch Postal">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mobile Number:</strong>
                            <input type="text" name="branch_mobile" value="{{ $branch->branch_mobile }}" class="form-control" placeholder="Branch Mobile">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Telephone Number:</strong>
                            <input type="text" name="branch_land" value="{{ $branch->branch_land }}" class="form-control" placeholder="Branch Land">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>E mail:</strong>
                            <input type="text" name="branch_email" value="{{ $branch->branch_email }}" class="form-control" placeholder="Branch Email">
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