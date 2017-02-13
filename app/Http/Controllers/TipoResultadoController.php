<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoResultadoRequest;
use App\Http\Requests\UpdateTipoResultadoRequest;
use App\Repositories\TipoResultadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoResultadoController extends AppBaseController
{
    /** @var  TipoResultadoRepository */
    private $tipoResultadoRepository;

    public function __construct(TipoResultadoRepository $tipoResultadoRepo)
    {
        $this->tipoResultadoRepository = $tipoResultadoRepo;
    }

    /**
     * Display a listing of the TipoResultado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoResultadoRepository->pushCriteria(new RequestCriteria($request));
        $tipoResultados = $this->tipoResultadoRepository->all();

        return view('tipo_resultados.index')
            ->with('tipoResultados', $tipoResultados);
    }

    /**
     * Show the form for creating a new TipoResultado.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_resultados.create');
    }

    /**
     * Store a newly created TipoResultado in storage.
     *
     * @param CreateTipoResultadoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoResultadoRequest $request)
    {
        $input = $request->all();

        $tipoResultado = $this->tipoResultadoRepository->create($input);

        Flash::success('Tipo Resultado saved successfully.');

        return redirect(route('tipoResultados.index'));
    }

    /**
     * Display the specified TipoResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoResultado = $this->tipoResultadoRepository->findWithoutFail($id);

        if (empty($tipoResultado)) {
            Flash::error('Tipo Resultado not found');

            return redirect(route('tipoResultados.index'));
        }

        return view('tipo_resultados.show')->with('tipoResultado', $tipoResultado);
    }

    /**
     * Show the form for editing the specified TipoResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoResultado = $this->tipoResultadoRepository->findWithoutFail($id);

        if (empty($tipoResultado)) {
            Flash::error('Tipo Resultado not found');

            return redirect(route('tipoResultados.index'));
        }

        return view('tipo_resultados.edit')->with('tipoResultado', $tipoResultado);
    }

    /**
     * Update the specified TipoResultado in storage.
     *
     * @param  int              $id
     * @param UpdateTipoResultadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoResultadoRequest $request)
    {
        $tipoResultado = $this->tipoResultadoRepository->findWithoutFail($id);

        if (empty($tipoResultado)) {
            Flash::error('Tipo Resultado not found');

            return redirect(route('tipoResultados.index'));
        }

        $tipoResultado = $this->tipoResultadoRepository->update($request->all(), $id);

        Flash::success('Tipo Resultado updated successfully.');

        return redirect(route('tipoResultados.index'));
    }

    /**
     * Remove the specified TipoResultado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoResultado = $this->tipoResultadoRepository->findWithoutFail($id);

        if (empty($tipoResultado)) {
            Flash::error('Tipo Resultado not found');

            return redirect(route('tipoResultados.index'));
        }

        $this->tipoResultadoRepository->delete($id);

        Flash::success('Tipo Resultado deleted successfully.');

        return redirect(route('tipoResultados.index'));
    }
}
