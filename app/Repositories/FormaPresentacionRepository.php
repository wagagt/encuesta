<?php

namespace App\Repositories;

use App\Models\FormaPresentacion;
use InfyOm\Generator\Common\BaseRepository;

class FormaPresentacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'forma',
        'tipo_presentacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FormaPresentacion::class;
    }
}
