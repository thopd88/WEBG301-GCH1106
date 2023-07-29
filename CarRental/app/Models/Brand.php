<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'name',
        'country',
        'founded',
        'logo',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
