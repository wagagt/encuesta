<?php

namespace App\Repositories;

use App\Models\BaseLegal;
use InfyOm\Generator\Common\BaseRepository;

class BaseLegalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_base',
        'nombre',
        'numero',
        'articulo',
        'notas',
        'doc_ubicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BaseLegal::class;
    }
}
