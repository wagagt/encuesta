<?php

namespace App\Repositories;

use App\Models\DocumentosUnidad;
use InfyOm\Generator\Common\BaseRepository;

class DocumentosUnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidade_id',
        'tipo_documento',
        'ubicacion',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocumentosUnidad::class;
    }
}
