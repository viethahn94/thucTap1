@extends('layout')

@section('title','Details for ' . $customer->name)

@section('content')

    <div class="row">
        <col-12>
            <h1>Details for {{ $customer->name }}</h1>
            <p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>
        </col-12>

    </div>

    <div class="row">
        <col-12>
            <p><strong>Name: </strong>{{ $customer->name }}</p>
            <p><strong>Email: </strong>{{ $customer->email }}</p>
            <p><strong>Phone: </strong>{{ $customer->phone }}</p>
            <p><strong>Company: </strong>{{ $customer->company->name }}</p>

        </col-12>
    </div>
@endsection

