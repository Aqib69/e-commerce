<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrivals extends Model
{
    use HasFactory;
    protected $table = "arrivals";
    protected $primaryKey = "arrivals_id";
    protected $fillable = [
        'image',
        'brand',
        'description',
        'price'
    ];
}
