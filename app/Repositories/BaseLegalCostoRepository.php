<?php

namespace App\Repositories;

use App\Models\BaseLegalCosto;
use InfyOm\Generator\Common\BaseRepository;

class BaseLegalCostoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BaseLegalCosto::class;
    }
}
