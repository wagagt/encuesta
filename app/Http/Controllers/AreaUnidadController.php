<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAreaUnidadRequest;
use App\Http\Requests\UpdateAreaUnidadRequest;
use App\Repositories\AreaUnidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaUnidadController extends AppBaseController
{
    /** @var  AreaUnidadRepository */
    private $areaUnidadRepository;

    public function __construct(AreaUnidadRepository $areaUnidadRepo)
    {
        $this->areaUnidadRepository = $areaUnidadRepo;
    }

    /**
     * Display a listing of the AreaUnidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaUnidadRepository->pushCriteria(new RequestCriteria($request));
        $areaUnidads = $this->areaUnidadRepository->all();

        return view('area_unidads.index')
            ->with('areaUnidads', $areaUnidads);
    }

    /**
     * Show the form for creating a new AreaUnidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_unidads.create');
    }

    /**
     * Store a newly created AreaUnidad in storage.
     *
     * @param CreateAreaUnidadRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaUnidadRequest $request)
    {
        $input = $request->all();

        $areaUnidad = $this->areaUnidadRepository->create($input);

        Flash::success('Area Unidad saved successfully.');

        return redirect(route('areaUnidads.index'));
    }

    /**
     * Display the specified AreaUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaUnidad = $this->areaUnidadRepository->findWithoutFail($id);

        if (empty($areaUnidad)) {
            Flash::error('Area Unidad not found');

            return redirect(route('areaUnidads.index'));
        }

        return view('area_unidads.show')->with('areaUnidad', $areaUnidad);
    }

    /**
     * Show the form for editing the specified AreaUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaUnidad = $this->areaUnidadRepository->findWithoutFail($id);

        if (empty($areaUnidad)) {
            Flash::error('Area Unidad not found');

            return redirect(route('areaUnidads.index'));
        }

        return view('area_unidads.edit')->with('areaUnidad', $areaUnidad);
    }

    /**
     * Update the specified AreaUnidad in storage.
     *
     * @param  int              $id
     * @param UpdateAreaUnidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaUnidadRequest $request)
    {
        $areaUnidad = $this->areaUnidadRepository->findWithoutFail($id);

        if (empty($areaUnidad)) {
            Flash::error('Area Unidad not found');

            return redirect(route('areaUnidads.index'));
        }

        $areaUnidad = $this->areaUnidadRepository->update($request->all(), $id);

        Flash::success('Area Unidad updated successfully.');

        return redirect(route('areaUnidads.index'));
    }

    /**
     * Remove the specified AreaUnidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaUnidad = $this->areaUnidadRepository->findWithoutFail($id);

        if (empty($areaUnidad)) {
            Flash::error('Area Unidad not found');

            return redirect(route('areaUnidads.index'));
        }

        $this->areaUnidadRepository->delete($id);

        Flash::success('Area Unidad deleted successfully.');

        return redirect(route('areaUnidads.index'));
    }
}
