<?php

namespace App\Repositories;

use App\Models\Institucion;
use InfyOm\Generator\Common\BaseRepository;

class InstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'sitio_web',
        'direccion',
        'telefonos',
        'pregunta_final',
        'estado_avance'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Institucion::class;
    }
}
