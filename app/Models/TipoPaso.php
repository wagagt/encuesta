<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoPaso
 * @package App\Models
 * @version February 12, 2017, 7:51 pm UTC
 */
class TipoPaso extends Model
{

    public $table = 'tipo_pasos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
