<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = ['DNI', 'nombre', 'apellido', 'email', 'telefono', 'genero', 'fecha_nac', 'nacionalidad', 'direccion', 'id_localidad'];
    protected $table = 'docente';
    protected $primaryKey = 'id_docente';

    // Un docente pertenece a una localidad
    public function localidad():BelongsTo{
        return $this->belongsTo(Localidad::class, 'id_localidad', 'id_localidad');
    }

    // Un docente tiene una o muchas disponibilidades
    public function disponibilidades():HasMany{
        return $this->hasMany(Disponibilidad::class, 'id_docente', 'id_docente');
    }

    // Un docente tiene una o muchos cambios docentes
    public function cambios_docente():HasMany{
        return $this->hasMany(cambios_docente::class, 'id_docente', 'id_docente');
    }

    // Un docente tiene una o muchos examenes
    public function examenes():HasMany{
        return $this->hasMany(Examen::class, 'id_docente', 'id_docente');
    }

    // Un docente tiene una o muchos docente_uc
    public function docente_uc():HasMany{
        return $this->hasMany(docente_uc::class, 'id_docente', 'id_docente');
    }

    // Un docente tiene una o muchos horario_previo_docente
    public function horario_previo_docente():HasMany{
        return $this->hasMany(HorarioPrevioDocente::class, 'id_docente', 'id_docente');
    }
    

}
