<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Procedimiento
 * @package App\Models
 * @version February 12, 2017, 10:32 pm UTC
 */
class Procedimiento extends Model
{

    public $table = 'procedimientos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'servicio_id',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'servicio_id' => 'integer',
        'descripcion' => 'string'
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
    public function servicio()
    {
        return $this->belongsTo(\App\Models\Servicio::class);
    }
}
