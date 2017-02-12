<?php

namespace App\Repositories;

use App\Models\Unidad;
use InfyOm\Generator\Common\BaseRepository;

class UnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'institucione_id',
        'nombre',
        'direccion',
        'telefonos',
        'personas_cantidad',
        'puestos_cantidad',
        'foto_ubicacion',
        'foto_personas_ubicacion',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unidad::class;
    }
}
