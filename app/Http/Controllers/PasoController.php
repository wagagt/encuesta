<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasoRequest;
use App\Http\Requests\UpdatePasoRequest;
use App\Repositories\PasoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PasoController extends AppBaseController
{
    /** @var  PasoRepository */
    private $pasoRepository;

    public function __construct(PasoRepository $pasoRepo)
    {
        $this->pasoRepository = $pasoRepo;
    }

    /**
     * Display a listing of the Paso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pasoRepository->pushCriteria(new RequestCriteria($request));
        $pasos = $this->pasoRepository->all();

        return view('pasos.index')
            ->with('pasos', $pasos);
    }

    /**
     * Show the form for creating a new Paso.
     *
     * @return Response
     */
    public function create()
    {
        return view('pasos.create');
    }

    /**
     * Store a newly created Paso in storage.
     *
     * @param CreatePasoRequest $request
     *
     * @return Response
     */
    public function store(CreatePasoRequest $request)
    {
        $input = $request->all();

        $paso = $this->pasoRepository->create($input);

        Flash::success('Paso saved successfully.');

        return redirect(route('pasos.index'));
    }

    /**
     * Display the specified Paso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paso = $this->pasoRepository->findWithoutFail($id);

        if (empty($paso)) {
            Flash::error('Paso not found');

            return redirect(route('pasos.index'));
        }

        return view('pasos.show')->with('paso', $paso);
    }

    /**
     * Show the form for editing the specified Paso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paso = $this->pasoRepository->findWithoutFail($id);

        if (empty($paso)) {
            Flash::error('Paso not found');

            return redirect(route('pasos.index'));
        }

        return view('pasos.edit')->with('paso', $paso);
    }

    /**
     * Update the specified Paso in storage.
     *
     * @param  int              $id
     * @param UpdatePasoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePasoRequest $request)
    {
        $paso = $this->pasoRepository->findWithoutFail($id);

        if (empty($paso)) {
            Flash::error('Paso not found');

            return redirect(route('pasos.index'));
        }

        $paso = $this->pasoRepository->update($request->all(), $id);

        Flash::success('Paso updated successfully.');

        return redirect(route('pasos.index'));
    }

    /**
     * Remove the specified Paso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paso = $this->pasoRepository->findWithoutFail($id);

        if (empty($paso)) {
            Flash::error('Paso not found');

            return redirect(route('pasos.index'));
        }

        $this->pasoRepository->delete($id);

        Flash::success('Paso deleted successfully.');

        return redirect(route('pasos.index'));
    }
}
