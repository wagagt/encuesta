<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoRequisitoRequest;
use App\Http\Requests\UpdateTipoRequisitoRequest;
use App\Repositories\TipoRequisitoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoRequisitoController extends AppBaseController
{
    /** @var  TipoRequisitoRepository */
    private $tipoRequisitoRepository;

    public function __construct(TipoRequisitoRepository $tipoRequisitoRepo)
    {
        $this->tipoRequisitoRepository = $tipoRequisitoRepo;
    }

    /**
     * Display a listing of the TipoRequisito.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoRequisitoRepository->pushCriteria(new RequestCriteria($request));
        $tipoRequisitos = $this->tipoRequisitoRepository->all();

        return view('tipo_requisitos.index')
            ->with('tipoRequisitos', $tipoRequisitos);
    }

    /**
     * Show the form for creating a new TipoRequisito.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_requisitos.create');
    }

    /**
     * Store a newly created TipoRequisito in storage.
     *
     * @param CreateTipoRequisitoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRequisitoRequest $request)
    {
        $input = $request->all();

        $tipoRequisito = $this->tipoRequisitoRepository->create($input);

        Flash::success('Tipo Requisito saved successfully.');

        return redirect(route('tipoRequisitos.index'));
    }

    /**
     * Display the specified TipoRequisito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoRequisito = $this->tipoRequisitoRepository->findWithoutFail($id);

        if (empty($tipoRequisito)) {
            Flash::error('Tipo Requisito not found');

            return redirect(route('tipoRequisitos.index'));
        }

        return view('tipo_requisitos.show')->with('tipoRequisito', $tipoRequisito);
    }

    /**
     * Show the form for editing the specified TipoRequisito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoRequisito = $this->tipoRequisitoRepository->findWithoutFail($id);

        if (empty($tipoRequisito)) {
            Flash::error('Tipo Requisito not found');

            return redirect(route('tipoRequisitos.index'));
        }

        return view('tipo_requisitos.edit')->with('tipoRequisito', $tipoRequisito);
    }

    /**
     * Update the specified TipoRequisito in storage.
     *
     * @param  int              $id
     * @param UpdateTipoRequisitoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRequisitoRequest $request)
    {
        $tipoRequisito = $this->tipoRequisitoRepository->findWithoutFail($id);

        if (empty($tipoRequisito)) {
            Flash::error('Tipo Requisito not found');

            return redirect(route('tipoRequisitos.index'));
        }

        $tipoRequisito = $this->tipoRequisitoRepository->update($request->all(), $id);

        Flash::success('Tipo Requisito updated successfully.');

        return redirect(route('tipoRequisitos.index'));
    }

    /**
     * Remove the specified TipoRequisito from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoRequisito = $this->tipoRequisitoRepository->findWithoutFail($id);

        if (empty($tipoRequisito)) {
            Flash::error('Tipo Requisito not found');

            return redirect(route('tipoRequisitos.index'));
        }

        $this->tipoRequisitoRepository->delete($id);

        Flash::success('Tipo Requisito deleted successfully.');

        return redirect(route('tipoRequisitos.index'));
    }
}
