<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosInstitucion
 * @package App\Models
 * @version February 12, 2017, 12:09 pm UTC
 */
class DocumentosInstitucion extends Model
{

    public $table = 'documentos_instituciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'institucione_id',
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
        'institucione_id' => 'integer',
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
    public function institucione()
    {
        return $this->belongsTo(\App\Models\Institucione::class);
    }
}
