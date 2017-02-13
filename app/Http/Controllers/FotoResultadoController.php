<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFotoResultadoRequest;
use App\Http\Requests\UpdateFotoResultadoRequest;
use App\Repositories\FotoResultadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FotoResultadoController extends AppBaseController
{
    /** @var  FotoResultadoRepository */
    private $fotoResultadoRepository;

    public function __construct(FotoResultadoRepository $fotoResultadoRepo)
    {
        $this->fotoResultadoRepository = $fotoResultadoRepo;
    }

    /**
     * Display a listing of the FotoResultado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fotoResultadoRepository->pushCriteria(new RequestCriteria($request));
        $fotoResultados = $this->fotoResultadoRepository->all();

        return view('foto_resultados.index')
            ->with('fotoResultados', $fotoResultados);
    }

    /**
     * Show the form for creating a new FotoResultado.
     *
     * @return Response
     */
    public function create()
    {
        return view('foto_resultados.create');
    }

    /**
     * Store a newly created FotoResultado in storage.
     *
     * @param CreateFotoResultadoRequest $request
     *
     * @return Response
     */
    public function store(CreateFotoResultadoRequest $request)
    {
        $input = $request->all();

        $fotoResultado = $this->fotoResultadoRepository->create($input);

        Flash::success('Foto Resultado saved successfully.');

        return redirect(route('fotoResultados.index'));
    }

    /**
     * Display the specified FotoResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fotoResultado = $this->fotoResultadoRepository->findWithoutFail($id);

        if (empty($fotoResultado)) {
            Flash::error('Foto Resultado not found');

            return redirect(route('fotoResultados.index'));
        }

        return view('foto_resultados.show')->with('fotoResultado', $fotoResultado);
    }

    /**
     * Show the form for editing the specified FotoResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fotoResultado = $this->fotoResultadoRepository->findWithoutFail($id);

        if (empty($fotoResultado)) {
            Flash::error('Foto Resultado not found');

            return redirect(route('fotoResultados.index'));
        }

        return view('foto_resultados.edit')->with('fotoResultado', $fotoResultado);
    }

    /**
     * Update the specified FotoResultado in storage.
     *
     * @param  int              $id
     * @param UpdateFotoResultadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFotoResultadoRequest $request)
    {
        $fotoResultado = $this->fotoResultadoRepository->findWithoutFail($id);

        if (empty($fotoResultado)) {
            Flash::error('Foto Resultado not found');

            return redirect(route('fotoResultados.index'));
        }

        $fotoResultado = $this->fotoResultadoRepository->update($request->all(), $id);

        Flash::success('Foto Resultado updated successfully.');

        return redirect(route('fotoResultados.index'));
    }

    /**
     * Remove the specified FotoResultado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fotoResultado = $this->fotoResultadoRepository->findWithoutFail($id);

        if (empty($fotoResultado)) {
            Flash::error('Foto Resultado not found');

            return redirect(route('fotoResultados.index'));
        }

        $this->fotoResultadoRepository->delete($id);

        Flash::success('Foto Resultado deleted successfully.');

        return redirect(route('fotoResultados.index'));
    }
}
