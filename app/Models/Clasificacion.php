<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clasificacion
 * @package App\Models
 * @version February 12, 2017, 6:25 pm UTC
 */
class Clasificacion extends Model
{

    public $table = 'clasificaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
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
