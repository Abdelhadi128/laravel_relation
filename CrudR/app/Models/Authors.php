<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Authors extends Model
{
    use HasFactory;
    protected $fillable = ['name','birth_year', 'country'];
    protected $primaryKey = 'authorId';

    public function books(){
        return $this->hasMany(Book::class, 'authorId');
    }
}
