<?php

namespace App\Repositories;

use App\Models\AreaUnidad;
use InfyOm\Generator\Common\BaseRepository;

class AreaUnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'area_id',
        'unidade_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaUnidad::class;
    }
}
