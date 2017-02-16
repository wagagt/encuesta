<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FotoResultado
 * @package App\Models
 * @version February 13, 2017, 3:23 am UTC
 */
class FotoResultado extends Model
{

    public $table = 'fotos_resultados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'resultado_id',
        'descripcion',
        'especifique'
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
        'especifique' => 'string'
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
