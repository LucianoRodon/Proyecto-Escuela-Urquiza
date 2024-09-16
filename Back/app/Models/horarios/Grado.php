<?php

namespace App\Models\horarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Grado extends Model
{
    use HasFactory;

    protected $fillable = ['Grado', 'Division', 'Detalle', 'Capacidad'];
    protected $table = 'grado';
    protected $primaryKey = 'Id_Grado';


    // Un grado tiene uno o muchos inscripciones
    public function inscripciones():HasMany{
        return $this->hasMany(Inscripcion::class, 'Id_Grado', 'Id_Grado');
    }

    // Un grado tiene uno o muchos inscripcion_aspirante
    public function inscripcion_aspirante():HasMany{
        return $this->hasMany(inscripcion_aspirante::class, 'Id_Grado', 'Id_Grado');
    }

    // Un grado tiene uno o muchos disponibilidad
    public function disponibilidad():HasMany{
        return $this->hasMany(Disponibilidad::class, 'Id_Grado', 'Id_Grado');
    }

    // Un grado tiene uno o muchos horarios
    public function horarios():HasMany{
        return $this->hasMany(Horario::class, 'Id_Grado', 'Id_Grado');
    }

    // Un grado tiene uno o muchos alumno_grado
    public function alumno_grado():HasMany{
        return $this->hasMany(alumno_grado::class, 'Id_Grado', 'Id_Grado');
    }

    // Un grado tiene uno o muchos grado_uc
    public function grado_uc():HasMany{
        return $this->hasMany(grado_uc::class, 'Id_Grado', 'Id_Grado');
    }

}
