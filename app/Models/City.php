<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Employee;
class City extends Model
{
    use HasFactory;
    public function customer(){
        return $this->hasMany(Customer::class);
    }
    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
