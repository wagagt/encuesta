<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Servicio
 * @package App\Models
 * @version February 12, 2017, 6:26 pm UTC
 */
class Servicio extends Model
{

    public $table = 'servicios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'unidade_id',
        'bases_legale_id',
        'otra_base_legal',
        'clasificacione_id',
        'otra_clasificacion',
        'nombre',
        'descripcion',
        'expone_muestra',
        'cantidad_procedimientos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidade_id' => 'integer',
        'bases_legale_id' => 'integer',
        'otra_base_legal' => 'string',
        'clasificacione_id' => 'integer',
        'otra_clasificacion' => 'string',
        'nombre' => 'string',
        'descripcion' => 'string',
        'expone_muestra' => 'string',
        'cantidad_procedimientos' => 'integer'
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
    public function clasificacione()
    {
        return $this->belongsTo(\App\Models\Clasificacione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function basesLegale()
    {
        return $this->belongsTo(\App\Models\BasesLegale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unidade()
    {
        return $this->belongsTo(\App\Models\Unidade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function procedimientos()
    {
        return $this->hasMany(\App\Models\Procedimiento::class);
    }
}
