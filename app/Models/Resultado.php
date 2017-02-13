<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Resultado
 * @package App\Models
 * @version February 13, 2017, 3:14 am UTC
 */
class Resultado extends Model
{

    public $table = 'resultados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo_resultado_id',
        'paso_id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_resultado_id' => 'integer',
        'paso_id' => 'integer',
        'nombre' => 'string'
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
    public function tipoResultado()
    {
        return $this->belongsTo(\App\Models\TipoResultado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paso()
    {
        return $this->belongsTo(\App\Models\Paso::class);
    }
}
