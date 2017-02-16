<?php

namespace App\Repositories;

use App\Models\TipoPresencia;
use InfyOm\Generator\Common\BaseRepository;

class TipoPresenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paso_id',
        'descripcion',
        'tipo',
        'minimo',
        'maximo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoPresencia::class;
    }
}
