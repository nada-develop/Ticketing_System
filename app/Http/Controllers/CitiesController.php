<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('cities.list', compact('cities'));
     }
     public function create(){
        return view('cities.new');

    }
    public function store(){
        $city = new City;
        $city->city_name = request('name');
        $city->save();
        return redirect('/cities');
    }
    public function show($id){
        $city = City::find($id);
        return view('cities.show', compact('city'));
    }
    public function edit($id){
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }
    public function update($id){
        $city = City::find($id);
        $city->city_name = request('name');
        $city->save();
        return redirect('/cities');
    }
}
