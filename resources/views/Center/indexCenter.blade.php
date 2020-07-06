@extends('layouts.master')
@section('title')

    Canty International
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div   class="card-body">
            <div class="row">
                <div class="col-lg-12 borrower_id">
                    <div class="pull-left">
                    <h2>Centers</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('center.create') }}"> Create New Center</a>
                    </div>
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
            <th>Center No</th>
            <th>Branch Name</th>
            <th> Address</th>
            <!-- <th> Province</th>
            <th> City</th>
            <th> Postal</th> -->
            <th> Mobile</th>
            <!-- <th> Land</th>
            <th> Email</th> -->

            <th width="200px">Action</th>
        </tr>
        @foreach ($centers as $center)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $center->center_name }}</td>
            <td>{{ $center->center_no }}</td>
            <td>{{ $center->branch_no }}</td>
            <td>{{ $center->center_address }}</td>
            <!-- <td>{{ $center->center_province  }}</td>
            <td>{{ $center->center_city }}</td>
            <td>{{ $center->center_postal }}</td> -->
            <td>{{ $center->center_mobile }}</td>
            <!-- <td>{{ $center->center_land }}</td>
            <td>{{ $center->center_email }}</td> -->
            <td width = "10px">
            <form action="{{ route('center.destroy',$center->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('center.show',$center->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('center.edit',$center->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>

    {!! $centers->links() !!}

@endsection
