<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Unidad
 * @package App\Models
 * @version February 12, 2017, 12:49 pm UTC
 */
class Unidad extends Model
{

    public $table = 'unidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'institucione_id',
        'nombre',
        'direccion',
        'telefonos',
        'personas_cantidad',
        'puestos_cantidad',
        'foto_ubicacion',
        'foto_personas_ubicacion',
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
        'nombre' => 'string',
        'direccion' => 'string',
        'telefonos' => 'string',
        'personas_cantidad' => 'integer',
        'puestos_cantidad' => 'integer',
        'foto_ubicacion' => 'string',
        'foto_personas_ubicacion' => 'string',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentosUnidades()
    {
        return $this->hasMany(\App\Models\DocumentosUnidade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function horariosUnidades()
    {
        return $this->hasMany(\App\Models\HorariosUnidade::class);
    }
}
