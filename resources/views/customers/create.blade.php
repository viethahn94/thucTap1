@extends('layout')

@section('title','Add New Customer')

@section('content')

    <div class="row">
        <col-12>
            <h1>Add New Customers</h1>
        </col-12>
    </div>

    <div class="row">
        <col-12>
            <form action="/customers" method="POST" >
                @include('customers.form')
                <button type="submit" class="btn btn-primary">Add Customers</button>
            </form>

        </col-12>
    </div>
@endsection

