<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Request;

class Customer extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function request(){
        return $this->hasMany(Request::class);
    }
}
