<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\City;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
       $customers = Customer::all();
       return view('customers.list', compact('customers'));
    }

    public function create(){
        $cities = City::all();
        return view('customers.new', compact('cities'));
    }

    public function store(){
        $cust = new Customer;
        $cust->name = request('name');
        $cust->email = request('email');
        $cust->phone = request('phone');
        $cust->address = request('address');
        $cust->city_id = request('city_id');
        $cust->save();
        return redirect('/customers');
    }

    public function show($id){
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id){
        $customer = Customer::find($id);
        $cities = City::all();
        return view('customers.edit', compact('customer','cities'));
    }

    public function update($id){
        $customer = Customer::find($id);
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->phone = request('phone');
        $customer->address = request('address');
        $customer->city_id = request('city_id');
        $customer->save();
        return redirect('/customers');
    }

    public function destroy($id){
        $cust = Customer::find($id);
        $cust->delete();
        return redirect('/customers');
    }
}
