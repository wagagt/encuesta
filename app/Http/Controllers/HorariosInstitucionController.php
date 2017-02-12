<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHorariosInstitucionRequest;
use App\Http\Requests\UpdateHorariosInstitucionRequest;
use App\Repositories\HorariosInstitucionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HorariosInstitucionController extends AppBaseController
{
    /** @var  HorariosInstitucionRepository */
    private $horariosInstitucionRepository;

    public function __construct(HorariosInstitucionRepository $horariosInstitucionRepo)
    {
        $this->horariosInstitucionRepository = $horariosInstitucionRepo;
    }

    /**
     * Display a listing of the HorariosInstitucion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->horariosInstitucionRepository->pushCriteria(new RequestCriteria($request));
        $horariosInstitucions = $this->horariosInstitucionRepository->all();

        return view('horarios_institucions.index')
            ->with('horariosInstitucions', $horariosInstitucions);
    }

    /**
     * Show the form for creating a new HorariosInstitucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('horarios_institucions.create');
    }

    /**
     * Store a newly created HorariosInstitucion in storage.
     *
     * @param CreateHorariosInstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreateHorariosInstitucionRequest $request)
    {
        $input = $request->all();

        $horariosInstitucion = $this->horariosInstitucionRepository->create($input);

        Flash::success('Horarios Institucion saved successfully.');

        return redirect(route('horariosInstitucions.index'));
    }

    /**
     * Display the specified HorariosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horariosInstitucion = $this->horariosInstitucionRepository->findWithoutFail($id);

        if (empty($horariosInstitucion)) {
            Flash::error('Horarios Institucion not found');

            return redirect(route('horariosInstitucions.index'));
        }

        return view('horarios_institucions.show')->with('horariosInstitucion', $horariosInstitucion);
    }

    /**
     * Show the form for editing the specified HorariosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horariosInstitucion = $this->horariosInstitucionRepository->findWithoutFail($id);

        if (empty($horariosInstitucion)) {
            Flash::error('Horarios Institucion not found');

            return redirect(route('horariosInstitucions.index'));
        }

        return view('horarios_institucions.edit')->with('horariosInstitucion', $horariosInstitucion);
    }

    /**
     * Update the specified HorariosInstitucion in storage.
     *
     * @param  int              $id
     * @param UpdateHorariosInstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorariosInstitucionRequest $request)
    {
        $horariosInstitucion = $this->horariosInstitucionRepository->findWithoutFail($id);

        if (empty($horariosInstitucion)) {
            Flash::error('Horarios Institucion not found');

            return redirect(route('horariosInstitucions.index'));
        }

        $horariosInstitucion = $this->horariosInstitucionRepository->update($request->all(), $id);

        Flash::success('Horarios Institucion updated successfully.');

        return redirect(route('horariosInstitucions.index'));
    }

    /**
     * Remove the specified HorariosInstitucion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horariosInstitucion = $this->horariosInstitucionRepository->findWithoutFail($id);

        if (empty($horariosInstitucion)) {
            Flash::error('Horarios Institucion not found');

            return redirect(route('horariosInstitucions.index'));
        }

        $this->horariosInstitucionRepository->delete($id);

        Flash::success('Horarios Institucion deleted successfully.');

        return redirect(route('horariosInstitucions.index'));
    }
}
