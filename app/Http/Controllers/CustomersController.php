<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        return view('internals.customers', compact('activeCustomers','inactiveCustomers'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:20',
            'active' => 'required',
        ]);
        Customer::create($data);


        return back();
    }
}
