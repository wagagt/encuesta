<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Puesto
 * @package App\Models
 * @version February 12, 2017, 4:13 pm UTC
 */
class Puesto extends Model
{

    public $table = 'puestos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'unidade_id',
        'nombre',
        'cantidad_personas',
        'jefe_inmediato',
        'reporta_a',
        'objetivo',
        'supervisa_a'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidade_id' => 'integer',
        'nombre' => 'string',
        'cantidad_personas' => 'integer',
        'jefe_inmediato' => 'string',
        'reporta_a' => 'string',
        'objetivo' => 'string',
        'supervisa_a' => 'string'
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
    public function unidade()
    {
        return $this->belongsTo(\App\Models\Unidade::class);
    }
}
