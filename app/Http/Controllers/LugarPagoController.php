<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLugarPagoRequest;
use App\Http\Requests\UpdateLugarPagoRequest;
use App\Repositories\LugarPagoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LugarPagoController extends AppBaseController
{
    /** @var  LugarPagoRepository */
    private $lugarPagoRepository;

    public function __construct(LugarPagoRepository $lugarPagoRepo)
    {
        $this->lugarPagoRepository = $lugarPagoRepo;
    }

    /**
     * Display a listing of the LugarPago.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lugarPagoRepository->pushCriteria(new RequestCriteria($request));
        $lugarPagos = $this->lugarPagoRepository->all();

        return view('lugar_pagos.index')
            ->with('lugarPagos', $lugarPagos);
    }

    /**
     * Show the form for creating a new LugarPago.
     *
     * @return Response
     */
    public function create()
    {
        return view('lugar_pagos.create');
    }

    /**
     * Store a newly created LugarPago in storage.
     *
     * @param CreateLugarPagoRequest $request
     *
     * @return Response
     */
    public function store(CreateLugarPagoRequest $request)
    {
        $input = $request->all();

        $lugarPago = $this->lugarPagoRepository->create($input);

        Flash::success('Lugar Pago saved successfully.');

        return redirect(route('lugarPagos.index'));
    }

    /**
     * Display the specified LugarPago.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lugarPago = $this->lugarPagoRepository->findWithoutFail($id);

        if (empty($lugarPago)) {
            Flash::error('Lugar Pago not found');

            return redirect(route('lugarPagos.index'));
        }

        return view('lugar_pagos.show')->with('lugarPago', $lugarPago);
    }

    /**
     * Show the form for editing the specified LugarPago.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lugarPago = $this->lugarPagoRepository->findWithoutFail($id);

        if (empty($lugarPago)) {
            Flash::error('Lugar Pago not found');

            return redirect(route('lugarPagos.index'));
        }

        return view('lugar_pagos.edit')->with('lugarPago', $lugarPago);
    }

    /**
     * Update the specified LugarPago in storage.
     *
     * @param  int              $id
     * @param UpdateLugarPagoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLugarPagoRequest $request)
    {
        $lugarPago = $this->lugarPagoRepository->findWithoutFail($id);

        if (empty($lugarPago)) {
            Flash::error('Lugar Pago not found');

            return redirect(route('lugarPagos.index'));
        }

        $lugarPago = $this->lugarPagoRepository->update($request->all(), $id);

        Flash::success('Lugar Pago updated successfully.');

        return redirect(route('lugarPagos.index'));
    }

    /**
     * Remove the specified LugarPago from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lugarPago = $this->lugarPagoRepository->findWithoutFail($id);

        if (empty($lugarPago)) {
            Flash::error('Lugar Pago not found');

            return redirect(route('lugarPagos.index'));
        }

        $this->lugarPagoRepository->delete($id);

        Flash::success('Lugar Pago deleted successfully.');

        return redirect(route('lugarPagos.index'));
    }
}
