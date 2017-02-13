<?php

namespace App\Repositories;

use App\Models\TipoResultado;
use InfyOm\Generator\Common\BaseRepository;

class TipoResultadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'especifique'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoResultado::class;
    }
}
