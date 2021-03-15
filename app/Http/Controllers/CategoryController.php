<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories_list = Category::all();
        return view('categories.list', compact('categories_list'));
    }

    public function create(){
        return view('categories.new');
    }

    public function store(){
        $category = new Category();
        $category->name = request('catname');
        $category->save();
        return redirect('/categories');
    }

    public function edit($id){
        $category= Category::find($id);
        return view('categories.edit',compact('category'));
    }


    public function update($id){
        $category = Category::find($id);
        $category->name = request('catname');
        $category->save();
        return redirect('/categories');
    }

    public function show($id){
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }
    public function destroy($id){
        $cat = Category::find($id);
        $cat->delete();
        return redirect('/categories');
    }
}
