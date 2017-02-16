<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ImagenResultado
 * @package App\Models
 * @version February 13, 2017, 3:28 am UTC
 */
class ImagenResultado extends Model
{

    public $table = 'imagenes_resultados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'resultado_id',
        'descripcion',
        'imagen_ubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'resultado_id' => 'integer',
        'descripcion' => 'string',
        'imagen_ubicacion' => 'string'
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
    public function resultado()
    {
        return $this->belongsTo(\App\Models\Resultado::class);
    }
}
