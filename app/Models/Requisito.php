<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Requisito
 * @package App\Models
 * @version February 13, 2017, 2:59 am UTC
 */
class Requisito extends Model
{

    public $table = 'requisitos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'paso_id',
        'tipo_requisito_id',
        'forma_presentacione_id',
        'base_legal_costo_id',
        'nombre',
        'forma_presentacion',
        'otra_forma_presentacion',
        'otro_tipo_requisito',
        'nombre_blc',
        'numero_blc',
        'articulo_blc',
        'otro_blc',
        'foto_blc_ubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paso_id' => 'integer',
        'tipo_requisito_id' => 'integer',
        'forma_presentacione_id' => 'integer',
        'base_legal_costo_id' => 'integer',
        'nombre' => 'string',
        'forma_presentacion' => 'string',
        'otra_forma_presentacion' => 'string',
        'otro_tipo_requisito' => 'string',
        'nombre_blc' => 'string',
        'numero_blc' => 'string',
        'articulo_blc' => 'string',
        'otro_blc' => 'string',
        'foto_blc_ubicacion' => 'string'
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
    public function baseLegalCosto()
    {
        return $this->belongsTo(\App\Models\BaseLegalCosto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function formaPresentacione()
    {
        return $this->belongsTo(\App\Models\FormaPresentacione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paso()
    {
        return $this->belongsTo(\App\Models\Paso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoRequisito()
    {
        return $this->belongsTo(\App\Models\TipoRequisito::class);
    }
}
