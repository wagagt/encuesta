<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Area
 * @package App\Models
 * @version February 12, 2017, 1:48 pm UTC
 */
class Area extends Model
{

    public $table = 'areas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'notas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function areaUnidades()
    {
        return $this->hasMany(\App\Models\AreaUnidade::class);
    }
}
