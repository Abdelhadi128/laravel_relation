<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['la_note', 'description'];
    protected $primaryKey = 'id_bultien';

    public function stagaire(){
        return $this->belongsTo(Stagaires::class, 'id_stagaire');
    }
}
