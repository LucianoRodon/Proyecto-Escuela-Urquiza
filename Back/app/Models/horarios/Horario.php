<?php

namespace App\Models\horarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['dia','modulo_inicio','modulo_fin','modalidad','id_disp','id_uc','id_aula','id_grado'];
    protected $table = 'horario';
    protected $primaryKey = 'id_horario';

    
    // Un horario pertenece a una disponibilidad
    public function disponibilidad():BelongsTo{
        return $this->belongsTo(Disponibilidad::class, 'id_disp', 'id_disp');
    }

    // Un horario pertenece a una unidad curricular
    public function unidadCurricular():BelongsTo{
        return $this->belongsTo(UnidadCurricular::class, 'id_uc', 'id_uc');
    }

    // Un horario pertenece a un aula
    public function aula():BelongsTo{
        return $this->belongsTo(Aula::class, 'id_aula', 'id_aula');
    }

    // Un horario pertenece a un grado
    public function grado():BelongsTo{
        return $this->belongsTo(Grado::class, 'id_grado', 'id_grado');
    }

}
