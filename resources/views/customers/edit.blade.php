@extends('layout')

@section('title','Edit Details for ' . $customer->name)

@section('content')

    <div class="row">
        <col-12>
            <h1>Edit Details for {{ $customer->name }}</h1>
        </col-12>
    </div>

    <div class="row">
        <col-12>
            <form action="/customers/{{ $customer->id }}" method="POST" >
                @method('PATCH')
                @include('customers.form')
                <button type="submit" class="btn btn-primary">Save Customers</button>
            </form>

        </col-12>
    </div>
@endsection

