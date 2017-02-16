<?php

namespace App\Repositories;

use App\Models\Puesto;
use InfyOm\Generator\Common\BaseRepository;

class PuestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidade_id',
        'nombre',
        'cantidad_personas',
        'jefe_inmediato',
        'reporta_a',
        'objetivo',
        'supervisa_a'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Puesto::class;
    }
}
