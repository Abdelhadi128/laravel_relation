<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'email'];
    protected $primaryKey = 'employeeId';

    public function employee_detail(){
        return $this->hasOne(Employee_detail::class, 'employeeId');
    }
}
