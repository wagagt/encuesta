<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class HorariosUnidad
 * @package App\Models
 * @version February 12, 2017, 1:23 pm UTC
 */
class HorariosUnidad extends Model
{

    public $table = 'horarios_unidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'unidade_id',
        'dia',
        'entrada',
        'salida',
        'medio_dia_cierra',
        'medio_dia_abre',
        'notas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidade_id' => 'integer',
        'dia' => 'string',
        'entrada' => 'string',
        'salida' => 'string',
        'medio_dia_cierra' => 'string',
        'medio_dia_abre' => 'string',
        'notas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unidade()
    {
        return $this->belongsTo(\App\Models\Unidade::class);
    }
}
