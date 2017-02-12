<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class RequisitosPuesto
 * @package App\Models
 * @version February 12, 2017, 4:24 pm UTC
 */
class RequisitosPuesto extends Model
{

    public $table = 'requisitos_puestos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'requerido',
        'tipo',
        'enunciado',
        'rango_respuestas',
        'respuesta',
        'notas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'requerido' => 'string',
        'tipo' => 'string',
        'enunciado' => 'string',
        'rango_respuestas' => 'string',
        'respuesta' => 'string',
        'notas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
