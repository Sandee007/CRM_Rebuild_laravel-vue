@extends('layouts.master')
@section('title')

    Canty International
@endsection
@section('content')


{{--//--------------------------------------------------------------------------------------------------------}}

<div class="container">
    <div class="card">
        <div   class="card-body">
            <div class="row">
                <div class="col-lg-12 borrower_id">
                    <div class="pull-left">
                    <h2>Branches</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('branch.create') }}"> Create New Branch</a>
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
            <th>No</th>
            <th> Address</th>
            <!-- <th> Province</th>
            <th> City</th>
            <th> Postal</th> -->
            <th> Mobile</th>
            <!-- <th> Land</th>
            <th> Email</th> -->

            <th width="200px">Action</th>
        </tr>
        @foreach ($branches as $branch)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $branch->branch_name }}</td>
            <td>{{ $branch->branch_no }}</td>
            <td>{{ $branch->branch_address }}</td>
            <!-- <td>{{ $branch->branch_province  }}</td>
            <td>{{ $branch->branch_city }}</td>
            <td>{{ $branch->branch_postal }}</td> -->
            <td>{{ $branch->branch_mobile }}</td>
            <!-- <td>{{ $branch->branch_land }}</td>
            <td>{{ $branch->branch_email }}</td> -->
            <td width = "10px">
            <form href="{{ route('branch.destroy',$branch->id) }}" >

                    <a class="btn btn-info" href="{{ route('branch.show',$branch->id) }}">Show</a>
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Show</button>--}}

                    <a class="btn btn-primary" href="{{ route('branch.edit',$branch->id) }}">Edit</a>
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Edit</button>--}}
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Show</button>--}}
                </form>
            </td>

        </tr>
        @endforeach
    </table>

    {!! $branches->links() !!}

@endsection
