<?php

namespace App\Repositories;

use App\Models\ImagenResultado;
use InfyOm\Generator\Common\BaseRepository;

class ImagenResultadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'resultado_id',
        'descripcion',
        'imagen_ubicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ImagenResultado::class;
    }
}
