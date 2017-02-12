<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactosInstitucionRequest;
use App\Http\Requests\UpdateContactosInstitucionRequest;
use App\Repositories\ContactosInstitucionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContactosInstitucionController extends AppBaseController
{
    /** @var  ContactosInstitucionRepository */
    private $contactosInstitucionRepository;

    public function __construct(ContactosInstitucionRepository $contactosInstitucionRepo)
    {
        $this->contactosInstitucionRepository = $contactosInstitucionRepo;
    }

    /**
     * Display a listing of the ContactosInstitucion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactosInstitucionRepository->pushCriteria(new RequestCriteria($request));
        $contactosInstitucions = $this->contactosInstitucionRepository->all();

        return view('contactos_institucions.index')
            ->with('contactosInstitucions', $contactosInstitucions);
    }

    /**
     * Show the form for creating a new ContactosInstitucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('contactos_institucions.create');
    }

    /**
     * Store a newly created ContactosInstitucion in storage.
     *
     * @param CreateContactosInstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreateContactosInstitucionRequest $request)
    {
        $input = $request->all();

        $contactosInstitucion = $this->contactosInstitucionRepository->create($input);

        Flash::success('Contactos Institucion saved successfully.');

        return redirect(route('contactosInstitucions.index'));
    }

    /**
     * Display the specified ContactosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactosInstitucion = $this->contactosInstitucionRepository->findWithoutFail($id);

        if (empty($contactosInstitucion)) {
            Flash::error('Contactos Institucion not found');

            return redirect(route('contactosInstitucions.index'));
        }

        return view('contactos_institucions.show')->with('contactosInstitucion', $contactosInstitucion);
    }

    /**
     * Show the form for editing the specified ContactosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactosInstitucion = $this->contactosInstitucionRepository->findWithoutFail($id);

        if (empty($contactosInstitucion)) {
            Flash::error('Contactos Institucion not found');

            return redirect(route('contactosInstitucions.index'));
        }

        return view('contactos_institucions.edit')->with('contactosInstitucion', $contactosInstitucion);
    }

    /**
     * Update the specified ContactosInstitucion in storage.
     *
     * @param  int              $id
     * @param UpdateContactosInstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactosInstitucionRequest $request)
    {
        $contactosInstitucion = $this->contactosInstitucionRepository->findWithoutFail($id);

        if (empty($contactosInstitucion)) {
            Flash::error('Contactos Institucion not found');

            return redirect(route('contactosInstitucions.index'));
        }

        $contactosInstitucion = $this->contactosInstitucionRepository->update($request->all(), $id);

        Flash::success('Contactos Institucion updated successfully.');

        return redirect(route('contactosInstitucions.index'));
    }

    /**
     * Remove the specified ContactosInstitucion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactosInstitucion = $this->contactosInstitucionRepository->findWithoutFail($id);

        if (empty($contactosInstitucion)) {
            Flash::error('Contactos Institucion not found');

            return redirect(route('contactosInstitucions.index'));
        }

        $this->contactosInstitucionRepository->delete($id);

        Flash::success('Contactos Institucion deleted successfully.');

        return redirect(route('contactosInstitucions.index'));
    }
}
