<?php

namespace App\Repositories;

use App\Models\LugarPago;
use InfyOm\Generator\Common\BaseRepository;

class LugarPagoRepository extends BaseRepository
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
        return LugarPago::class;
    }
}
