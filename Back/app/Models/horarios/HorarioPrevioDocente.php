<?php

namespace App\Models\horarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     schema="HorarioPrevioDocente",
 *     title="HorarioPrevioDocente",
 *     description="Esquema del objeto HorarioPrevioDocente",
 *     @OA\Property(
 *          property="id_h_p_d",
 *          type="integer",
 *          description="ID del horario previo del docente"
 *     ),
 *     @OA\Property(
 *          property="dni_docente",
 *          type="string",
 *          description="DNI del docente"
 *     ),
 *     @OA\Property(
 *          property="dia",
 *          type="string",
 *          description="Dia de la semana"
 *     ),
 *     @OA\Property(
 *          property="hora",
 *          type="time",
 *          description="Hora del horario"
 *     )
 * )
 */
class HorarioPrevioDocente extends Model
{
    use HasFactory;

    protected $table = 'horario_previo_docente';

    protected $fillable = ['id_docente', 'dia', 'hora'];
    protected $primaryKey = 'id_h_p_d';


    // Un horario previo docente pertenece a un docente
    public function docente():HasMany{
        return $this->hasMany(Docente::class, 'id_docente', 'id_docente');
    }

    // Un horario previo docente tiene una o muchas disponibilidades
    public function disponibilidades():HasMany{
        return $this->hasMany(Disponibilidad::class, 'id_h_p_d', 'id_h_p_d');
    }
    



}
