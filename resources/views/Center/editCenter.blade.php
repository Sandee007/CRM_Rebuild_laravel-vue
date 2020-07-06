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
                <h2>Edit Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('center.index') }}"> Back</a>
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
  
            <form action="{{ route('center.update',$center->id) }}" method="POST">
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Center Name:</strong>
                            <input type="text" name="center_name" value="{{ $center->center_name }}" class="form-control" placeholder="Center Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch No:</strong>
                            <input type="text" name="center_no" value="{{ $center->center_no }}" class="form-control" placeholder="Center No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Branch No:</strong>
                            <input type="text" name="branch_no" value="{{ $center->branch_no }}" class="form-control" placeholder="Branch No">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="center_address" value="{{ $center->center_address }}" class="form-control" placeholder="Center Address">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Province:</strong>
                            <input type="text" name="center_province" value="{{ $center->center_province }}" class="form-control" placeholder="Center Province">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>City:</strong>
                            <input type="text" name="center_city" value="{{ $center->center_city }}" class="form-control" placeholder="Center City">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Postal Code:</strong>
                            <input type="text" name="center_postal" value="{{ $center->branch_postal }}" class="form-control" placeholder="Center Postal">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mobile Number:</strong>
                            <input type="text" name="center_mobile" value="{{ $center->center_mobile }}" class="form-control" placeholder="Center Mobile">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Telephone Number:</strong>
                            <input type="text" name="center_land" value="{{ $center->center_land }}" class="form-control" placeholder="Center Land">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>E mail:</strong>
                            <input type="text" name="center_email" value="{{ $center->center_email }}" class="form-control" placeholder="Center Email">
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