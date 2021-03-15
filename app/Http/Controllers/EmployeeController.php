<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $employees_list = Employee::all();
        return view('employees.list', compact('employees_list'));
    }

    public function create(){
        return view('employees.new');
    }

    public function store(){
        $emp = new Employee();
        $emp->name = request('ename');
        $emp->mobile_number = request('ephone');
        $emp->home_number = request('ehome');
        $emp->email = request('eemail');
        $emp->address = request('eaddress');
        $emp->hiring_date = request('hiring_date');
        $emp->city_id = request('city');
        $emp->department_id = request('department');
        $emp->user_id = request('user_id');
        $emp->save();
        return redirect('/employees');
    }

    public function edit($id){
        $emp = Employee::find($id);
        return view('employees.edit',compact('emp'));
    }

    public function update($id){
        $emp = new Employee();
        $emp->name = request('ename');
        $emp->mobile_number = request('ephone');
        $emp->home_number = request('ehome');
        $emp->email = request('eemail');
        $emp->address = request('eaddress');
        $emp->hiring_date = request('hiring_date');
        $emp->city_id = request('city');
        $emp->department_id = request('department');
        $emp->user_id = request('user_id');
        $emp->save();
        return redirect('/employees');
    }

    public function show($id){
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
    }

    public function destroy($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees.list');
    }
}
