<?php

namespace App\Repositories;

use App\Models\MetodoPago;
use InfyOm\Generator\Common\BaseRepository;

class MetodoPagoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paso_id',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MetodoPago::class;
    }
}
