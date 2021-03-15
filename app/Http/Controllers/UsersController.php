<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{

        public function index(){
            $users = User::all();
        return view('users.list', compact('users'));
        }

        public function create(){
            return view('users.new');
        }

        public function store(){
            $user = new User;
            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('pass')); //or Hash::make(request('pass'));
            $user->save();
            return redirect('/users');
        }

        public function show($id){
            $user = User::find($id);
            return view('users.show', compact('user'));
        }

        public function edit($id){
            $user = User::find($id);
            return view('users.edit', compact('user'));
        }

        public function update($id){
            $user = User::find($id);
            $user->name = request('name');
            $user->email = request('email');
            $user->password = request('pass');
            $user->save();
            return redirect('/users');
        }

        public function destroy($id){
            $user = User::find($id);
            $user->delete();
        return redirect('/users');
        }


}
