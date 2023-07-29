<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [        
        'brand_id',
        'model',
        'color',
        'year',
        'plate',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
