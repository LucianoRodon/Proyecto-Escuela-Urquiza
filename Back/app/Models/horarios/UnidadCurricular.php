<?php

namespace App\Models\horarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class UnidadCurricular extends Model
{
    use HasFactory;
    protected $fillable = ['Unidad_Curricular','Tipo', 'HorasSem', 'HorasAnual', 'Formato'];
    protected $table = 'unidad_curricular';
    protected $primaryKey = 'Id_UC';


    // Una unidad curricular tiene uno o muchas notas
    public function notas():HasMany{
        return $this->hasMany(Nota::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas carrera_uc
    public function carrera_uc():HasMany{
        return $this->hasMany(carrera_uc::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas inscripciones_uc
    public function inscripciones_uc():HasMany{
        return $this->hasMany(inscripciones_uc::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas uc_plan
    public function uc_plan():HasMany{
        return $this->hasMany(uc_plan::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas docente_uc
    public function docente_uc():HasMany{
        return $this->hasMany(docente_uc::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchos examenes
    public function examenes():HasMany{
        return $this->hasMany(Examen::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas asistencia
    public function asistencia():HasMany{
        return $this->hasMany(Asistencia::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas grado_uc
    public function grado_uc():HasMany{
        return $this->hasMany(grado_uc::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas alumno_uc
    public function alumno_uc():HasMany{
        return $this->hasMany(alumno_uc::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas correlatividades
    public function correlatividades():HasMany{
        return $this->hasMany(Correlatividad::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas disponibilidad
    public function disponibilidad():HasMany{
        return $this->hasMany(Disponibilidad::class, 'Id_UC', 'Id_UC');
    }

    // Una unidad curricular tiene uno o muchas horarios
    public function horarios():HasMany{
        return $this->hasMany(Horario::class, 'Id_UC', 'Id_UC');
    }
    

}
