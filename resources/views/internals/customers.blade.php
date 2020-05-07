@extends('layout')

@section('content')

    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="name">
        </div>

        <div style="color: red">{{ $errors->first('name') }}</div>

        <button type="submit">Add Customers</button>

        @csrf

    </form>



    <ul>
        @foreach($customers as $customer)
           <li>{{ $customer->name }}</li>
        @endforeach
    </ul>

@endsection


