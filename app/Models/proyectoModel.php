<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectoModel extends Model
{
    use HasFactory;

    protected $table = 'proyectos'; 

    protected $fillable = [
        'nombre',
        'fechaInicio',
        'estado',
        'responsable',
        'monto',
        'created_by'
    ];
}
