<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosUnidad
 * @package App\Models
 * @version February 12, 2017, 1:14 pm UTC
 */
class DocumentosUnidad extends Model
{

    public $table = 'documentos_unidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'unidade_id',
        'tipo_documento',
        'ubicacion',
        'notas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidade_id' => 'integer',
        'tipo_documento' => 'string',
        'ubicacion' => 'string',
        'notas' => 'string'
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
