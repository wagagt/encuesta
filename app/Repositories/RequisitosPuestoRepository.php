<?php

namespace App\Repositories;

use App\Models\RequisitosPuesto;
use InfyOm\Generator\Common\BaseRepository;

class RequisitosPuestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'requerido',
        'tipo',
        'enunciado',
        'rango_respuestas',
        'respuesta',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RequisitosPuesto::class;
    }
}
