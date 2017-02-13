<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResultadoRequest;
use App\Http\Requests\UpdateResultadoRequest;
use App\Repositories\ResultadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ResultadoController extends AppBaseController
{
    /** @var  ResultadoRepository */
    private $resultadoRepository;

    public function __construct(ResultadoRepository $resultadoRepo)
    {
        $this->resultadoRepository = $resultadoRepo;
    }

    /**
     * Display a listing of the Resultado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->resultadoRepository->pushCriteria(new RequestCriteria($request));
        $resultados = $this->resultadoRepository->all();

        return view('resultados.index')
            ->with('resultados', $resultados);
    }

    /**
     * Show the form for creating a new Resultado.
     *
     * @return Response
     */
    public function create()
    {
        return view('resultados.create');
    }

    /**
     * Store a newly created Resultado in storage.
     *
     * @param CreateResultadoRequest $request
     *
     * @return Response
     */
    public function store(CreateResultadoRequest $request)
    {
        $input = $request->all();

        $resultado = $this->resultadoRepository->create($input);

        Flash::success('Resultado saved successfully.');

        return redirect(route('resultados.index'));
    }

    /**
     * Display the specified Resultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resultado = $this->resultadoRepository->findWithoutFail($id);

        if (empty($resultado)) {
            Flash::error('Resultado not found');

            return redirect(route('resultados.index'));
        }

        return view('resultados.show')->with('resultado', $resultado);
    }

    /**
     * Show the form for editing the specified Resultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resultado = $this->resultadoRepository->findWithoutFail($id);

        if (empty($resultado)) {
            Flash::error('Resultado not found');

            return redirect(route('resultados.index'));
        }

        return view('resultados.edit')->with('resultado', $resultado);
    }

    /**
     * Update the specified Resultado in storage.
     *
     * @param  int              $id
     * @param UpdateResultadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResultadoRequest $request)
    {
        $resultado = $this->resultadoRepository->findWithoutFail($id);

        if (empty($resultado)) {
            Flash::error('Resultado not found');

            return redirect(route('resultados.index'));
        }

        $resultado = $this->resultadoRepository->update($request->all(), $id);

        Flash::success('Resultado updated successfully.');

        return redirect(route('resultados.index'));
    }

    /**
     * Remove the specified Resultado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resultado = $this->resultadoRepository->findWithoutFail($id);

        if (empty($resultado)) {
            Flash::error('Resultado not found');

            return redirect(route('resultados.index'));
        }

        $this->resultadoRepository->delete($id);

        Flash::success('Resultado deleted successfully.');

        return redirect(route('resultados.index'));
    }
}
