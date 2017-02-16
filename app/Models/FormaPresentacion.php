<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FormaPresentacion
 * @package App\Models
 * @version February 13, 2017, 2:50 am UTC
 */
class FormaPresentacion extends Model
{

    public $table = 'forma_presentaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'forma',
        'tipo_presentacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'forma' => 'string',
        'tipo_presentacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
