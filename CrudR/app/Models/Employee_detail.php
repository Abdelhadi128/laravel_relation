<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee_detail extends Model
{
    use HasFactory;
    protected $fillable = ['phone', 'adress'];
    protected $primaryKey = 'employee_detail_id';

    public function employee(){
        return $this->belongsTo(Employee::class, 'employeeId');
    }
}
