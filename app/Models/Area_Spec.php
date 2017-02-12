<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Area_Spec
 * @package App\Models
 * @version February 12, 2017, 4:00 pm UTC
 */
class Area_Spec extends Model
{

    public $table = 'areas_specs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'area_id',
        'nombre',
        'evaluacion_criterio1',
        'evaluacion_criterio2',
        'foto_ubicacion',
        'notas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'area_id' => 'integer',
        'nombre' => 'string',
        'evaluacion_criterio1' => 'string',
        'evaluacion_criterio2' => 'string',
        'foto_ubicacion' => 'string',
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
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class);
    }
}
