<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\App\Models\Localidad;


class Aspirante extends Model
{
    use HasFactory;

    // Nombre de la tabla
    // protected $table = 'aspirante';

    // // Clave primaria
    // protected $primaryKey = 'id_aspirante';


    // Definir los campos que pueden asignarse de forma masiva
    protected $fillable = [
        'id_aspirante',
        'DNI',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'genero',
        'fecha_nac',
        'nacionalidad',
        'direccion',
        'id_localidad'
    ];

    // Relaciones (si es necesario)
    // public function localidad()
    // {
    //     return $this->belongsTo(Localidad::class, 'id_localidad', 'id_localidad');
    // }
}
