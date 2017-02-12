<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoPresencia
 * @package App\Models
 * @version February 12, 2017, 7:39 pm UTC
 */
class TipoPresencia extends Model
{

    public $table = 'tipos_presencias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'paso_id',
        'descripcion',
        'tipo',
        'minimo',
        'maximo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paso_id' => 'integer',
        'descripcion' => 'string',
        'tipo' => 'string',
        'minimo' => 'integer',
        'maximo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
