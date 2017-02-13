<?php

namespace App\Repositories;

use App\Models\Requisito;
use InfyOm\Generator\Common\BaseRepository;

class RequisitoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paso_id',
        'tipo_requisito_id',
        'forma_presentacione_id',
        'base_legal_costo_id',
        'nombre',
        'forma_presentacion',
        'otra_forma_presentacion',
        'otro_tipo_requisito',
        'nombre_blc',
        'numero_blc',
        'articulo_blc',
        'otro_blc',
        'foto_blc_ubicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Requisito::class;
    }
}
