<?php

namespace App\Repositories;

use App\Models\FotoResultado;
use InfyOm\Generator\Common\BaseRepository;

class FotoResultadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'resultado_id',
        'descripcion',
        'especifique'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FotoResultado::class;
    }
}
