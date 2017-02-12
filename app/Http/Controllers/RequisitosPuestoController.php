<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequisitosPuestoRequest;
use App\Http\Requests\UpdateRequisitosPuestoRequest;
use App\Repositories\RequisitosPuestoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RequisitosPuestoController extends AppBaseController
{
    /** @var  RequisitosPuestoRepository */
    private $requisitosPuestoRepository;

    public function __construct(RequisitosPuestoRepository $requisitosPuestoRepo)
    {
        $this->requisitosPuestoRepository = $requisitosPuestoRepo;
    }

    /**
     * Display a listing of the RequisitosPuesto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->requisitosPuestoRepository->pushCriteria(new RequestCriteria($request));
        $requisitosPuestos = $this->requisitosPuestoRepository->all();

        return view('requisitos_puestos.index')
            ->with('requisitosPuestos', $requisitosPuestos);
    }

    /**
     * Show the form for creating a new RequisitosPuesto.
     *
     * @return Response
     */
    public function create()
    {
        return view('requisitos_puestos.create');
    }

    /**
     * Store a newly created RequisitosPuesto in storage.
     *
     * @param CreateRequisitosPuestoRequest $request
     *
     * @return Response
     */
    public function store(CreateRequisitosPuestoRequest $request)
    {
        $input = $request->all();

        $requisitosPuesto = $this->requisitosPuestoRepository->create($input);

        Flash::success('Requisitos Puesto saved successfully.');

        return redirect(route('requisitosPuestos.index'));
    }

    /**
     * Display the specified RequisitosPuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requisitosPuesto = $this->requisitosPuestoRepository->findWithoutFail($id);

        if (empty($requisitosPuesto)) {
            Flash::error('Requisitos Puesto not found');

            return redirect(route('requisitosPuestos.index'));
        }

        return view('requisitos_puestos.show')->with('requisitosPuesto', $requisitosPuesto);
    }

    /**
     * Show the form for editing the specified RequisitosPuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requisitosPuesto = $this->requisitosPuestoRepository->findWithoutFail($id);

        if (empty($requisitosPuesto)) {
            Flash::error('Requisitos Puesto not found');

            return redirect(route('requisitosPuestos.index'));
        }

        return view('requisitos_puestos.edit')->with('requisitosPuesto', $requisitosPuesto);
    }

    /**
     * Update the specified RequisitosPuesto in storage.
     *
     * @param  int              $id
     * @param UpdateRequisitosPuestoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequisitosPuestoRequest $request)
    {
        $requisitosPuesto = $this->requisitosPuestoRepository->findWithoutFail($id);

        if (empty($requisitosPuesto)) {
            Flash::error('Requisitos Puesto not found');

            return redirect(route('requisitosPuestos.index'));
        }

        $requisitosPuesto = $this->requisitosPuestoRepository->update($request->all(), $id);

        Flash::success('Requisitos Puesto updated successfully.');

        return redirect(route('requisitosPuestos.index'));
    }

    /**
     * Remove the specified RequisitosPuesto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requisitosPuesto = $this->requisitosPuestoRepository->findWithoutFail($id);

        if (empty($requisitosPuesto)) {
            Flash::error('Requisitos Puesto not found');

            return redirect(route('requisitosPuestos.index'));
        }

        $this->requisitosPuestoRepository->delete($id);

        Flash::success('Requisitos Puesto deleted successfully.');

        return redirect(route('requisitosPuestos.index'));
    }
}
