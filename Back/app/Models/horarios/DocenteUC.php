<?php

namespace App\Models\horarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * 
 */
class DocenteUC extends Model
{
    use HasFactory;
    protected $fillable = ['id_docente','id_uc'];
    protected $table = 'docente_uc';

    // Un docente_uc pertenece a una unidad curricular
    public function unidadCurricular():BelongsTo{
        return $this->belongsTo(UnidadCurricular::class, 'id_uc', 'id_uc');
    }

    // Un docente_uc pertenece a un docente
    public function docente():BelongsTo{
        return $this->belongsTo(Docente::class, 'id_docente', 'id_docente');
    }

}
