<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class HorariosInstitucion
 * @package App\Models
 * @version February 12, 2017, 12:18 pm UTC
 */
class HorariosInstitucion extends Model
{

    public $table = 'horarios_instituciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'institucione_id',
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
        'institucione_id' => 'integer',
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
    public function institucione()
    {
        return $this->belongsTo(\App\Models\Institucione::class);
    }
}
