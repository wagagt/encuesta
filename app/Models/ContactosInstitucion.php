<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ContactosInstitucion
 * @package App\Models
 * @version February 12, 2017, 12:15 pm UTC
 */
class ContactosInstitucion extends Model
{

    public $table = 'contactos_instituciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'institucione_id',
        'nombre',
        'titulo_cargo',
        'email',
        'telefono_directo',
        'foto_ubicacion'
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
        'titulo_cargo' => 'string',
        'email' => 'string',
        'telefono_directo' => 'string',
        'foto_ubicacion' => 'string'
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
