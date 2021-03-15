<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
        public function index(){
        $departments_list = Department::all();
        return view('departments.list', compact('departments_list'));
    }

    public function create(){
        return view('departments.new');
    }

    public function store(){
        $department = new Department();
        $department->name = request('dname');
        $department->save();
        return redirect('/departments');
    }

    public function edit($id){
        $department = Department::find($id);
        return view('departments.edit',compact('department'));
    }


    public function update($id){
        $department = Department::find($id);
        $department->name = request('dname');
        $department->save();
        return redirect('/departments');
    }

    public function show($id){
        $department = Department::find($id);
        return view('departments.show', compact('department'));
    }
}
