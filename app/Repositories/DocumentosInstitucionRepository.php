<?php

namespace App\Repositories;

use App\Models\DocumentosInstitucion;
use InfyOm\Generator\Common\BaseRepository;

class DocumentosInstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'institucione_id',
        'tipo_documento',
        'ubicacion',
        'notas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocumentosInstitucion::class;
    }
}
