<?php

namespace App\Repositories;

use App\Models\ContactosInstitucion;
use InfyOm\Generator\Common\BaseRepository;

class ContactosInstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'institucione_id',
        'nombre',
        'titulo_cargo',
        'email',
        'telefono_directo',
        'foto_ubicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactosInstitucion::class;
    }
}
