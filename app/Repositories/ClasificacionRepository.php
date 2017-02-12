<?php

namespace App\Repositories;

use App\Models\Clasificacion;
use InfyOm\Generator\Common\BaseRepository;

class ClasificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clasificacion::class;
    }
}
