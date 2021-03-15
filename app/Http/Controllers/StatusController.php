<?php

namespace App\Http\Controllers;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('statuses.list', compact('status'));
     }
     public function create(){
        return view('statuses.new');

    }
    public function store(){
        $status = new Status;
        $status->name = request('name');
        $status->save();
        return redirect('/statuses');
    }
    public function show($id){
        $status = Status::find($id);
        return view('statuses.show', compact('status'));
    }
    public function edit($id){
        $status = Status::find($id);
        return view('statuses.edit', compact('status'));
    }
    public function update($id){
        $status = Status::find($id);
        $status->name = request('name');
        $status->save();
        return redirect('/statuses');
    }
}
