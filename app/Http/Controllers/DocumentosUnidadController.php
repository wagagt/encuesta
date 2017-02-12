<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentosUnidadRequest;
use App\Http\Requests\UpdateDocumentosUnidadRequest;
use App\Repositories\DocumentosUnidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DocumentosUnidadController extends AppBaseController
{
    /** @var  DocumentosUnidadRepository */
    private $documentosUnidadRepository;

    public function __construct(DocumentosUnidadRepository $documentosUnidadRepo)
    {
        $this->documentosUnidadRepository = $documentosUnidadRepo;
    }

    /**
     * Display a listing of the DocumentosUnidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->documentosUnidadRepository->pushCriteria(new RequestCriteria($request));
        $documentosUnidads = $this->documentosUnidadRepository->all();

        return view('documentos_unidads.index')
            ->with('documentosUnidads', $documentosUnidads);
    }

    /**
     * Show the form for creating a new DocumentosUnidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('documentos_unidads.create');
    }

    /**
     * Store a newly created DocumentosUnidad in storage.
     *
     * @param CreateDocumentosUnidadRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentosUnidadRequest $request)
    {
        $input = $request->all();

        $documentosUnidad = $this->documentosUnidadRepository->create($input);

        Flash::success('Documentos Unidad saved successfully.');

        return redirect(route('documentosUnidads.index'));
    }

    /**
     * Display the specified DocumentosUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentosUnidad = $this->documentosUnidadRepository->findWithoutFail($id);

        if (empty($documentosUnidad)) {
            Flash::error('Documentos Unidad not found');

            return redirect(route('documentosUnidads.index'));
        }

        return view('documentos_unidads.show')->with('documentosUnidad', $documentosUnidad);
    }

    /**
     * Show the form for editing the specified DocumentosUnidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentosUnidad = $this->documentosUnidadRepository->findWithoutFail($id);

        if (empty($documentosUnidad)) {
            Flash::error('Documentos Unidad not found');

            return redirect(route('documentosUnidads.index'));
        }

        return view('documentos_unidads.edit')->with('documentosUnidad', $documentosUnidad);
    }

    /**
     * Update the specified DocumentosUnidad in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentosUnidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentosUnidadRequest $request)
    {
        $documentosUnidad = $this->documentosUnidadRepository->findWithoutFail($id);

        if (empty($documentosUnidad)) {
            Flash::error('Documentos Unidad not found');

            return redirect(route('documentosUnidads.index'));
        }

        $documentosUnidad = $this->documentosUnidadRepository->update($request->all(), $id);

        Flash::success('Documentos Unidad updated successfully.');

        return redirect(route('documentosUnidads.index'));
    }

    /**
     * Remove the specified DocumentosUnidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentosUnidad = $this->documentosUnidadRepository->findWithoutFail($id);

        if (empty($documentosUnidad)) {
            Flash::error('Documentos Unidad not found');

            return redirect(route('documentosUnidads.index'));
        }

        $this->documentosUnidadRepository->delete($id);

        Flash::success('Documentos Unidad deleted successfully.');

        return redirect(route('documentosUnidads.index'));
    }
}
