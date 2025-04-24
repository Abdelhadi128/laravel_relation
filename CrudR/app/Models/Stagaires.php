<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagaires extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'pr"nom','email', 'phone', 'age'];
    protected $primaryKey = 'stagaire_id';
    public function bultien(){
        return $this->hasOne(Classe::class, 'stagaire_id');
    }
}
