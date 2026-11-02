<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;
}
protected $fillable=['nombre']
