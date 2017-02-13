<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEjecutorRequest;
use App\Http\Requests\UpdateEjecutorRequest;
use App\Repositories\EjecutorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EjecutorController extends AppBaseController
{
    /** @var  EjecutorRepository */
    private $ejecutorRepository;

    public function __construct(EjecutorRepository $ejecutorRepo)
    {
        $this->ejecutorRepository = $ejecutorRepo;
    }

    /**
     * Display a listing of the Ejecutor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ejecutorRepository->pushCriteria(new RequestCriteria($request));
        $ejecutors = $this->ejecutorRepository->all();

        return view('ejecutors.index')
            ->with('ejecutors', $ejecutors);
    }

    /**
     * Show the form for creating a new Ejecutor.
     *
     * @return Response
     */
    public function create()
    {
        return view('ejecutors.create');
    }

    /**
     * Store a newly created Ejecutor in storage.
     *
     * @param CreateEjecutorRequest $request
     *
     * @return Response
     */
    public function store(CreateEjecutorRequest $request)
    {
        $input = $request->all();

        $ejecutor = $this->ejecutorRepository->create($input);

        Flash::success('Ejecutor saved successfully.');

        return redirect(route('ejecutors.index'));
    }

    /**
     * Display the specified Ejecutor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ejecutor = $this->ejecutorRepository->findWithoutFail($id);

        if (empty($ejecutor)) {
            Flash::error('Ejecutor not found');

            return redirect(route('ejecutors.index'));
        }

        return view('ejecutors.show')->with('ejecutor', $ejecutor);
    }

    /**
     * Show the form for editing the specified Ejecutor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ejecutor = $this->ejecutorRepository->findWithoutFail($id);

        if (empty($ejecutor)) {
            Flash::error('Ejecutor not found');

            return redirect(route('ejecutors.index'));
        }

        return view('ejecutors.edit')->with('ejecutor', $ejecutor);
    }

    /**
     * Update the specified Ejecutor in storage.
     *
     * @param  int              $id
     * @param UpdateEjecutorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEjecutorRequest $request)
    {
        $ejecutor = $this->ejecutorRepository->findWithoutFail($id);

        if (empty($ejecutor)) {
            Flash::error('Ejecutor not found');

            return redirect(route('ejecutors.index'));
        }

        $ejecutor = $this->ejecutorRepository->update($request->all(), $id);

        Flash::success('Ejecutor updated successfully.');

        return redirect(route('ejecutors.index'));
    }

    /**
     * Remove the specified Ejecutor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ejecutor = $this->ejecutorRepository->findWithoutFail($id);

        if (empty($ejecutor)) {
            Flash::error('Ejecutor not found');

            return redirect(route('ejecutors.index'));
        }

        $this->ejecutorRepository->delete($id);

        Flash::success('Ejecutor deleted successfully.');

        return redirect(route('ejecutors.index'));
    }
}
