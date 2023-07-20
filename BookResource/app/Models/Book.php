<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books'; // this is the table name
    protected $fillable = ['title', 'description', 'year']; // these are the fields that can be filled
}
