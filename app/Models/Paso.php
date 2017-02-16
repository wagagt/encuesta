<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Paso
 * @package App\Models
 * @version February 12, 2017, 10:25 pm UTC
 */
class Paso extends Model
{

    public $table = 'pasos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'procedimiento_id',
        'base_legal_costos_id',
        'tipos_presencia_id',
        'tipo_paso_id',
        'costo',
        'existe_costo',
        'pago_interno',
        'es_agencia_banco',
        'no_agencia_especifique',
        'base_legal_costo',
        'nombre_blc',
        'numero_blc',
        'articulo_blc',
        'otro_blc',
        'requiere_presencia',
        'foto_blc_ubicacion',
        'tipo_resultado_especifique',
        'otro_tipo_paso',
        'otro_metodo_pago',
        'otro_tipo_resultado',
        'otro_lugar_pago',
        'otro_base_legal_costo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'procedimiento_id' => 'integer',
        'base_legal_costos_id' => 'integer',
        'tipos_presencia_id' => 'integer',
        'tipo_paso_id' => 'integer',
        'costo' => 'float',
        'existe_costo' => 'string',
        'pago_interno' => 'string',
        'es_agencia_banco' => 'string',
        'no_agencia_especifique' => 'string',
        'base_legal_costo' => 'string',
        'nombre_blc' => 'string',
        'numero_blc' => 'string',
        'articulo_blc' => 'string',
        'otro_blc' => 'string',
        'requiere_presencia' => 'string',
        'foto_blc_ubicacion' => 'string',
        'tipo_resultado_especifique' => 'string',
        'otro_tipo_paso' => 'string',
        'otro_metodo_pago' => 'string',
        'otro_tipo_resultado' => 'string',
        'otro_lugar_pago' => 'string',
        'otro_base_legal_costo' => 'string'
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
    public function procedimiento()
    {
        return $this->belongsTo(\App\Models\Procedimiento::class);
    }
}
