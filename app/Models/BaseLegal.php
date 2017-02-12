<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class BaseLegal
 * @package App\Models
 * @version February 12, 2017, 6:26 pm UTC
 */
class BaseLegal extends Model
{

    public $table = 'bases_legales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre_base',
        'nombre',
        'numero',
        'articulo',
        'notas',
        'doc_ubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_base' => 'string',
        'nombre' => 'string',
        'numero' => 'string',
        'articulo' => 'string',
        'notas' => 'string',
        'doc_ubicacion' => 'string'
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
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class);
    }
}
