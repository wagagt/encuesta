<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProcedimientoRequest;
use App\Http\Requests\UpdateProcedimientoRequest;
use App\Repositories\ProcedimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProcedimientoController extends AppBaseController
{
    /** @var  ProcedimientoRepository */
    private $procedimientoRepository;

    public function __construct(ProcedimientoRepository $procedimientoRepo)
    {
        $this->procedimientoRepository = $procedimientoRepo;
    }

    /**
     * Display a listing of the Procedimiento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->procedimientoRepository->pushCriteria(new RequestCriteria($request));
        $procedimientos = $this->procedimientoRepository->all();

        return view('procedimientos.index')
            ->with('procedimientos', $procedimientos);
    }

    /**
     * Show the form for creating a new Procedimiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('procedimientos.create');
    }

    /**
     * Store a newly created Procedimiento in storage.
     *
     * @param CreateProcedimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateProcedimientoRequest $request)
    {
        $input = $request->all();

        $procedimiento = $this->procedimientoRepository->create($input);

        Flash::success('Procedimiento saved successfully.');

        return redirect(route('procedimientos.index'));
    }

    /**
     * Display the specified Procedimiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $procedimiento = $this->procedimientoRepository->findWithoutFail($id);

        if (empty($procedimiento)) {
            Flash::error('Procedimiento not found');

            return redirect(route('procedimientos.index'));
        }

        return view('procedimientos.show')->with('procedimiento', $procedimiento);
    }

    /**
     * Show the form for editing the specified Procedimiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $procedimiento = $this->procedimientoRepository->findWithoutFail($id);

        if (empty($procedimiento)) {
            Flash::error('Procedimiento not found');

            return redirect(route('procedimientos.index'));
        }

        return view('procedimientos.edit')->with('procedimiento', $procedimiento);
    }

    /**
     * Update the specified Procedimiento in storage.
     *
     * @param  int              $id
     * @param UpdateProcedimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcedimientoRequest $request)
    {
        $procedimiento = $this->procedimientoRepository->findWithoutFail($id);

        if (empty($procedimiento)) {
            Flash::error('Procedimiento not found');

            return redirect(route('procedimientos.index'));
        }

        $procedimiento = $this->procedimientoRepository->update($request->all(), $id);

        Flash::success('Procedimiento updated successfully.');

        return redirect(route('procedimientos.index'));
    }

    /**
     * Remove the specified Procedimiento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $procedimiento = $this->procedimientoRepository->findWithoutFail($id);

        if (empty($procedimiento)) {
            Flash::error('Procedimiento not found');

            return redirect(route('procedimientos.index'));
        }

        $this->procedimientoRepository->delete($id);

        Flash::success('Procedimiento deleted successfully.');

        return redirect(route('procedimientos.index'));
    }
}
