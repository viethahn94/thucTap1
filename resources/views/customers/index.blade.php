@extends('layout')

@section('title','Customer List')

@section('content')

    <div class="row">
        <col-12>
            <h1>Customer List</h1>
            <p><a href="/customers/create">Add New Customer</a></p>
        </col-12>
    </div>

   @foreach($customers as $customer)
       <div class="row">
           <div class="col-2">
               {{ $customer->id }}
           </div>
       </div>
       <div class="col-4">
           <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
       </div>
       <div class="col-4">{{ $customer->company->name }}</div>
       <div class="col-2">{{ $customer->active}}</div>
   @endforeach

@endsection
