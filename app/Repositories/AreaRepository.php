<?php

namespace App\Repositories;

use App\Models\Area;
use InfyOm\Generator\Common\BaseRepository;

class AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area::class;
    }
}
