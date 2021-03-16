<?php

namespace App\Models;
use App\Models\City;
use App\Models\Department;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }



}
