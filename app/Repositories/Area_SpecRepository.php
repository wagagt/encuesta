<?php

namespace App\Repositories;

use App\Models\Area_Spec;
use InfyOm\Generator\Common\BaseRepository;

class Area_SpecRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'area_id',
        'nombre',
        'evaluacion_criterio1',
        'evaluacion_criterio2',
        'foto_ubicacion',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area_Spec::class;
    }
}
