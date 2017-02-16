<?php

namespace App\Repositories;

use App\Models\TipoPaso;
use InfyOm\Generator\Common\BaseRepository;

class TipoPasoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoPaso::class;
    }
}
