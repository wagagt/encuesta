<?php

namespace App\Repositories;

use App\Models\Ejecutor;
use InfyOm\Generator\Common\BaseRepository;

class EjecutorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paso_id',
        'nombre',
        'puesto',
        'recibe_del_paso',
        'entrega_al_paso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ejecutor::class;
    }
}
