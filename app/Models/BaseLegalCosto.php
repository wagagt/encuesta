<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class BaseLegalCosto
 * @package App\Models
 * @version February 12, 2017, 7:46 pm UTC
 */
class BaseLegalCosto extends Model
{

    public $table = 'base_legal_costos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
