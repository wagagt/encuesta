<?php

namespace App\Repositories;

use App\Models\HorariosUnidad;
use InfyOm\Generator\Common\BaseRepository;

class HorariosUnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidade_id',
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
        return HorariosUnidad::class;
    }
}
