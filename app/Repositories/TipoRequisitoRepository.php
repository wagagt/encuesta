<?php

namespace App\Repositories;

use App\Models\TipoRequisito;
use InfyOm\Generator\Common\BaseRepository;

class TipoRequisitoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoRequisito::class;
    }
}
