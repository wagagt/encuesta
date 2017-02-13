<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoRequisito
 * @package App\Models
 * @version February 13, 2017, 12:29 am UTC
 */
class TipoRequisito extends Model
{

    public $table = 'tipo_requisitos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
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
