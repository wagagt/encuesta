<?php

namespace App\Repositories;

use App\Models\HorariosInstitucion;
use InfyOm\Generator\Common\BaseRepository;

class HorariosInstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'institucione_id',
        'dia',
        'entrada',
        'salida',
        'medio_dia_cierra',
        'medio_dia_abre',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return HorariosInstitucion::class;
    }
}
