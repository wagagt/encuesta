<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class MetodoPago
 * @package App\Models
 * @version February 12, 2017, 11:52 pm UTC
 */
class MetodoPago extends Model
{

    public $table = 'metodos_pagos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
    public function paso()
    {
        return $this->belongsTo(\App\Models\Paso::class);
    }
}
