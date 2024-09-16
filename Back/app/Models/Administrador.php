<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = ['DNI','nombre','apellido','email','telefono','genero','fecha_nac', 'nacionalidad','direccion','id_localidad'];
    protected $table = 'administrador';
    protected $primaryKey = 'id_admin';

    // Un administrador pertenece a una localidad
    public function localidad():BelongsTo{
        return $this->belongsTo(Localidad::class, 'id_localidad', 'id_localidad');
    }

}
