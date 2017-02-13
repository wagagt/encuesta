<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ejecutor
 * @package App\Models
 * @version February 13, 2017, 12:12 am UTC
 */
class Ejecutor extends Model
{

    public $table = 'ejecutores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'paso_id',
        'nombre',
        'puesto',
        'recibe_del_paso',
        'entrega_al_paso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paso_id' => 'integer',
        'nombre' => 'string',
        'puesto' => 'string',
        'recibe_del_paso' => 'string',
        'entrega_al_paso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
