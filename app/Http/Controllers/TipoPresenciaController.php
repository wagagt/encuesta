<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoPresenciaRequest;
use App\Http\Requests\UpdateTipoPresenciaRequest;
use App\Repositories\TipoPresenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoPresenciaController extends AppBaseController
{
    /** @var  TipoPresenciaRepository */
    private $tipoPresenciaRepository;

    public function __construct(TipoPresenciaRepository $tipoPresenciaRepo)
    {
        $this->tipoPresenciaRepository = $tipoPresenciaRepo;
    }

    /**
     * Display a listing of the TipoPresencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoPresenciaRepository->pushCriteria(new RequestCriteria($request));
        $tipoPresencias = $this->tipoPresenciaRepository->all();

        return view('tipo_presencias.index')
            ->with('tipoPresencias', $tipoPresencias);
    }

    /**
     * Show the form for creating a new TipoPresencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_presencias.create');
    }

    /**
     * Store a newly created TipoPresencia in storage.
     *
     * @param CreateTipoPresenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoPresenciaRequest $request)
    {
        $input = $request->all();

        $tipoPresencia = $this->tipoPresenciaRepository->create($input);

        Flash::success('Tipo Presencia saved successfully.');

        return redirect(route('tipoPresencias.index'));
    }

    /**
     * Display the specified TipoPresencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoPresencia = $this->tipoPresenciaRepository->findWithoutFail($id);

        if (empty($tipoPresencia)) {
            Flash::error('Tipo Presencia not found');

            return redirect(route('tipoPresencias.index'));
        }

        return view('tipo_presencias.show')->with('tipoPresencia', $tipoPresencia);
    }

    /**
     * Show the form for editing the specified TipoPresencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoPresencia = $this->tipoPresenciaRepository->findWithoutFail($id);

        if (empty($tipoPresencia)) {
            Flash::error('Tipo Presencia not found');

            return redirect(route('tipoPresencias.index'));
        }

        return view('tipo_presencias.edit')->with('tipoPresencia', $tipoPresencia);
    }

    /**
     * Update the specified TipoPresencia in storage.
     *
     * @param  int              $id
     * @param UpdateTipoPresenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoPresenciaRequest $request)
    {
        $tipoPresencia = $this->tipoPresenciaRepository->findWithoutFail($id);

        if (empty($tipoPresencia)) {
            Flash::error('Tipo Presencia not found');

            return redirect(route('tipoPresencias.index'));
        }

        $tipoPresencia = $this->tipoPresenciaRepository->update($request->all(), $id);

        Flash::success('Tipo Presencia updated successfully.');

        return redirect(route('tipoPresencias.index'));
    }

    /**
     * Remove the specified TipoPresencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoPresencia = $this->tipoPresenciaRepository->findWithoutFail($id);

        if (empty($tipoPresencia)) {
            Flash::error('Tipo Presencia not found');

            return redirect(route('tipoPresencias.index'));
        }

        $this->tipoPresenciaRepository->delete($id);

        Flash::success('Tipo Presencia deleted successfully.');

        return redirect(route('tipoPresencias.index'));
    }
}
