<?php

namespace App\Repositories;

use App\Models\Servicio;
use InfyOm\Generator\Common\BaseRepository;

class ServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidade_id',
        'bases_legale_id',
        'otra_base_legal',
        'clasificacione_id',
        'otra_clasificacion',
        'nombre',
        'descripcion',
        'expone_muestra',
        'cantidad_procedimientos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicio::class;
    }
}
