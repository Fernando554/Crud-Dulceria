<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dulce extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre del dulce', 'marca', 'precio', 'cantidad'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
