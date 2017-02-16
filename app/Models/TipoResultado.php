<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoResultado
 * @package App\Models
 * @version February 13, 2017, 3:24 am UTC
 */
class TipoResultado extends Model
{

    public $table = 'tipo_resultados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo',
        'especifique'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class);
    }
}
