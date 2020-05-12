<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function store(Request $request)
    {

        Customer::create($this->validateRequest());
        return redirect('/customers');
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies','customer'));
    }

    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer','companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());
        return redirect('customers/' . $customer->id);
    }

    private function validateRequest()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:20',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }
}
