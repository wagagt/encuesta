<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnidadRequest;
use App\Http\Requests\UpdateUnidadRequest;
use App\Repositories\UnidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UnidadController extends AppBaseController
{
    /** @var  UnidadRepository */
    private $unidadRepository;

    public function __construct(UnidadRepository $unidadRepo)
    {
        $this->unidadRepository = $unidadRepo;
    }

    /**
     * Display a listing of the Unidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->unidadRepository->pushCriteria(new RequestCriteria($request));
        $unidads = $this->unidadRepository->all();

        return view('unidads.index')
            ->with('unidads', $unidads);
    }

    /**
     * Show the form for creating a new Unidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('unidads.create');
    }

    /**
     * Store a newly created Unidad in storage.
     *
     * @param CreateUnidadRequest $request
     *
     * @return Response
     */
    public function store(CreateUnidadRequest $request)
    {
        $input = $request->all();

        $unidad = $this->unidadRepository->create($input);

        Flash::success('Unidad saved successfully.');

        return redirect(route('unidads.index'));
    }

    /**
     * Display the specified Unidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unidad = $this->unidadRepository->findWithoutFail($id);

        if (empty($unidad)) {
            Flash::error('Unidad not found');

            return redirect(route('unidads.index'));
        }

        return view('unidads.show')->with('unidad', $unidad);
    }

    /**
     * Show the form for editing the specified Unidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidad = $this->unidadRepository->findWithoutFail($id);

        if (empty($unidad)) {
            Flash::error('Unidad not found');

            return redirect(route('unidads.index'));
        }

        return view('unidads.edit')->with('unidad', $unidad);
    }

    /**
     * Update the specified Unidad in storage.
     *
     * @param  int              $id
     * @param UpdateUnidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUnidadRequest $request)
    {
        $unidad = $this->unidadRepository->findWithoutFail($id);

        if (empty($unidad)) {
            Flash::error('Unidad not found');

            return redirect(route('unidads.index'));
        }

        $unidad = $this->unidadRepository->update($request->all(), $id);

        Flash::success('Unidad updated successfully.');

        return redirect(route('unidads.index'));
    }

    /**
     * Remove the specified Unidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unidad = $this->unidadRepository->findWithoutFail($id);

        if (empty($unidad)) {
            Flash::error('Unidad not found');

            return redirect(route('unidads.index'));
        }

        $this->unidadRepository->delete($id);

        Flash::success('Unidad deleted successfully.');

        return redirect(route('unidads.index'));
    }
}
