<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentosInstitucionRequest;
use App\Http\Requests\UpdateDocumentosInstitucionRequest;
use App\Repositories\DocumentosInstitucionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DocumentosInstitucionController extends AppBaseController
{
    /** @var  DocumentosInstitucionRepository */
    private $documentosInstitucionRepository;

    public function __construct(DocumentosInstitucionRepository $documentosInstitucionRepo)
    {
        $this->documentosInstitucionRepository = $documentosInstitucionRepo;
    }

    /**
     * Display a listing of the DocumentosInstitucion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->documentosInstitucionRepository->pushCriteria(new RequestCriteria($request));
        $documentosInstitucions = $this->documentosInstitucionRepository->all();

        return view('documentos_institucions.index')
            ->with('documentosInstitucions', $documentosInstitucions);
    }

    /**
     * Show the form for creating a new DocumentosInstitucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('documentos_institucions.create');
    }

    /**
     * Store a newly created DocumentosInstitucion in storage.
     *
     * @param CreateDocumentosInstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentosInstitucionRequest $request)
    {
        $input = $request->all();

        $documentosInstitucion = $this->documentosInstitucionRepository->create($input);

        Flash::success('Documentos Institucion saved successfully.');

        return redirect(route('documentosInstitucions.index'));
    }

    /**
     * Display the specified DocumentosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentosInstitucion = $this->documentosInstitucionRepository->findWithoutFail($id);

        if (empty($documentosInstitucion)) {
            Flash::error('Documentos Institucion not found');

            return redirect(route('documentosInstitucions.index'));
        }

        return view('documentos_institucions.show')->with('documentosInstitucion', $documentosInstitucion);
    }

    /**
     * Show the form for editing the specified DocumentosInstitucion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentosInstitucion = $this->documentosInstitucionRepository->findWithoutFail($id);

        if (empty($documentosInstitucion)) {
            Flash::error('Documentos Institucion not found');

            return redirect(route('documentosInstitucions.index'));
        }

        return view('documentos_institucions.edit')->with('documentosInstitucion', $documentosInstitucion);
    }

    /**
     * Update the specified DocumentosInstitucion in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentosInstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentosInstitucionRequest $request)
    {
        $documentosInstitucion = $this->documentosInstitucionRepository->findWithoutFail($id);

        if (empty($documentosInstitucion)) {
            Flash::error('Documentos Institucion not found');

            return redirect(route('documentosInstitucions.index'));
        }

        $documentosInstitucion = $this->documentosInstitucionRepository->update($request->all(), $id);

        Flash::success('Documentos Institucion updated successfully.');

        return redirect(route('documentosInstitucions.index'));
    }

    /**
     * Remove the specified DocumentosInstitucion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentosInstitucion = $this->documentosInstitucionRepository->findWithoutFail($id);

        if (empty($documentosInstitucion)) {
            Flash::error('Documentos Institucion not found');

            return redirect(route('documentosInstitucions.index'));
        }

        $this->documentosInstitucionRepository->delete($id);

        Flash::success('Documentos Institucion deleted successfully.');

        return redirect(route('documentosInstitucions.index'));
    }
}
