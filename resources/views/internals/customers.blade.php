@extends('layout')

@section('title','Customer List')

@section('content')

    <div class="row">
        <col-12>
            <h1>Customer List</h1>
        </col-12>
    </div>

    <div class="row">
        <col-12>
            <form action="customers" method="POST" >
                <label for="name">Name</label>
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div style="color: red">{{ $errors->first('name') }}</div>
                </div>


                <label for="email">Email</label>
                <div class="form-group">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div style="color: red">{{ $errors->first('email') }}</div>
                </div>

                <label for="phone">Phone</label>
                <div class="form-group">
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                    <div style="color: red">{{ $errors->first('phone') }}</div>
                </div>
                <label for="active">Status</label>
                <div class="form-group">
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled> Select customer status</option>
                        <option value="1" >Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Customers</button>
                @csrf

            </form>

        </col-12>
    </div>
    <hr>
    <div class="row">

        <col-6>
            <h3>Active Customers</h3>
            <ul>
                @foreach($activeCustomers as $activeCustomers)
                    <li>{{ $activeCustomers->name }}  <span class="text-muted">{{ $activeCustomers->email }}</span> </li>
                @endforeach
            </ul>
        </col-6>


        <col-6>
            <h3>Inactive Customers</h3>
            <ul>
                @foreach($inactiveCustomers as $inactiveCustomers)
                    <li>{{ $inactiveCustomers->name }}  <span class="text-muted">({{ $inactiveCustomers->email }})</span> </li>
                @endforeach
            </ul>
        </col-6>
    </div>


@endsection


