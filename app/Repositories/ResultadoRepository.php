<?php

namespace App\Repositories;

use App\Models\Resultado;
use InfyOm\Generator\Common\BaseRepository;

class ResultadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_resultado_id',
        'paso_id',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Resultado::class;
    }
}
