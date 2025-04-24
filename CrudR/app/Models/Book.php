<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Book extends Model
{
    use HasFactory;
    protected $primaryKey = 'bookId';
    protected $fillable = ['title','published_year','bookId'];

    public function author(){
        return $this->belongsTo(Authors::class, 'authorId');
    }
}
