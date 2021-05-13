<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $casts = ['toppings' => 'array']; //necesitamos convertir en array el dato que llega de la BD.
}
