<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHorariosUnidadRequest;
use App\Http\Requests\UpdateHorariosUnidadRequest;
use App\Repositories\HorariosUnidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HorariosUnidadController extends AppBaseController
{
    /** @var  HorariosUnidadRepository */
    private $horariosUnidadRepository;

    public function __construct(HorariosUnidadRepository $horariosUnidadRepo)
    {
        $this->horariosUnidadRepository = $horariosUnidadRepo;
    }

    /**
     * Display a listing of the HorariosUnidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->horariosUnidadRepository->pushCriteria(new RequestCriteria($request));
        $horariosUnidads = $this->horariosUnidadRepository->all();

        return view('horarios_unidads.index')
            ->with('horariosUnidads', $horariosUnidads);
    }

    /**
     * Show the form for creating a new HorariosUnidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('horarios_unidads.create');
    }

    /**
     * Store a newly created HorariosUnidad in storage.
     *
     * @param CreateHorariosUnidadRequest $request
     *
     * @return Response
     */
    public function store(CreateHorariosUnidadRequest $request)
    {
        $input = $request->all();

        $horariosUnidad = $this->horariosUnidadRepository->create($input);

        Flash::success('Horarios Unidad saved successfully.');

        return redirect(route('horariosUnidads.index'));
    }

    /**
     * Display the specified HorariosUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horariosUnidad = $this->horariosUnidadRepository->findWithoutFail($id);

        if (empty($horariosUnidad)) {
            Flash::error('Horarios Unidad not found');

            return redirect(route('horariosUnidads.index'));
        }

        return view('horarios_unidads.show')->with('horariosUnidad', $horariosUnidad);
    }

    /**
     * Show the form for editing the specified HorariosUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horariosUnidad = $this->horariosUnidadRepository->findWithoutFail($id);

        if (empty($horariosUnidad)) {
            Flash::error('Horarios Unidad not found');

            return redirect(route('horariosUnidads.index'));
        }

        return view('horarios_unidads.edit')->with('horariosUnidad', $horariosUnidad);
    }

    /**
     * Update the specified HorariosUnidad in storage.
     *
     * @param  int              $id
     * @param UpdateHorariosUnidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorariosUnidadRequest $request)
    {
        $horariosUnidad = $this->horariosUnidadRepository->findWithoutFail($id);

        if (empty($horariosUnidad)) {
            Flash::error('Horarios Unidad not found');

            return redirect(route('horariosUnidads.index'));
        }

        $horariosUnidad = $this->horariosUnidadRepository->update($request->all(), $id);

        Flash::success('Horarios Unidad updated successfully.');

        return redirect(route('horariosUnidads.index'));
    }

    /**
     * Remove the specified HorariosUnidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horariosUnidad = $this->horariosUnidadRepository->findWithoutFail($id);

        if (empty($horariosUnidad)) {
            Flash::error('Horarios Unidad not found');

            return redirect(route('horariosUnidads.index'));
        }

        $this->horariosUnidadRepository->delete($id);

        Flash::success('Horarios Unidad deleted successfully.');

        return redirect(route('horariosUnidads.index'));
    }
}
