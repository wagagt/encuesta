<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Institucion
 * @package App\Models
 * @version February 12, 2017, 11:52 am UTC
 */
class Institucion extends Model
{

    public $table = 'instituciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'sitio_web',
        'direccion',
        'telefonos',
        'pregunta_final',
        'estado_avance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'sitio_web' => 'string',
        'direccion' => 'string',
        'telefonos' => 'string',
        'pregunta_final' => 'string',
        'estado_avance' => 'integer'
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
    public function contactosInstituciones()
    {
        return $this->hasMany(\App\Models\ContactosInstitucione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentosInstituciones()
    {
        return $this->hasMany(\App\Models\DocumentosInstitucione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function horariosInstituciones()
    {
        return $this->hasMany(\App\Models\HorariosInstitucione::class);
    }
}
