<?php

namespace App\Repositories;

use App\Models\Paso;
use InfyOm\Generator\Common\BaseRepository;

class PasoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'procedimiento_id',
        'base_legal_costos_id',
        'tipos_presencia_id',
        'tipo_paso_id',
        'costo',
        'existe_costo',
        'pago_interno',
        'es_agencia_banco',
        'no_agencia_especifique',
        'base_legal_costo',
        'nombre_blc',
        'numero_blc',
        'articulo_blc',
        'otro_blc',
        'requiere_presencia',
        'foto_blc_ubicacion',
        'tipo_resultado_especifique',
        'otro_tipo_paso',
        'otro_metodo_pago',
        'otro_tipo_resultado',
        'otro_lugar_pago',
        'otro_base_legal_costo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paso::class;
    }
}
