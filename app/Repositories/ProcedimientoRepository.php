<?php

namespace App\Repositories;

use App\Models\Procedimiento;
use InfyOm\Generator\Common\BaseRepository;

class ProcedimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'servicio_id',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Procedimiento::class;
    }
}
