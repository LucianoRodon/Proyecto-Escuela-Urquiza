<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['DNI', 'Nombre', 'Apellido', 'Email', 'Telefono', 'Genero', 'Fecha_Nac', 'Nacionalidad', 'Direccion', 'id_localidad'];
    protected $table = 'alumno';
    protected $primaryKey = 'Id_Alumno';

    // Un alumno pertenece a una localidad
    public function localidad():BelongsTo{
        return $this->belongsTo(Localidad::class, 'id_localidad', 'id_localidad');
    }

    // Un alumno tiene una o muchas alumno_grado
    public function alumno_grado():HasMany{
        return $this->hasMany(alumno_grado::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchos alumno_carrera
    public function alumno_carrera():HasMany{
        return $this->hasMany(alumno_carrera::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas inscripcion_examenes
    public function inscripcion_examenes():HasMany{
        return $this->hasMany(inscripcion_examenes::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas alumno_uc
    public function alumno_uc():HasMany{
        return $this->hasMany(alumno_uc::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas asistencia
    public function asistencia():HasMany{
        return $this->hasMany(Asistencia::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas solicitudes
    public function solicitudes():HasMany{
        return $this->hasMany(Solicitud::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas alumno_plan
    public function alumno_plan():HasMany{
        return $this->hasMany(alumno_plan::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas inscripcion
    public function inscripcion():HasMany{
        return $this->hasMany(Inscripcion::class, 'Id_Alumno', 'Id_Alumno');
    }

    // Un alumno tiene una o muchas notas
    public function notas():HasMany{
        return $this->hasMany(Nota::class, 'Id_Alumno', 'Id_Alumno');
    }

}
