<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImagenResultadoRequest;
use App\Http\Requests\UpdateImagenResultadoRequest;
use App\Repositories\ImagenResultadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ImagenResultadoController extends AppBaseController
{
    /** @var  ImagenResultadoRepository */
    private $imagenResultadoRepository;

    public function __construct(ImagenResultadoRepository $imagenResultadoRepo)
    {
        $this->imagenResultadoRepository = $imagenResultadoRepo;
    }

    /**
     * Display a listing of the ImagenResultado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imagenResultadoRepository->pushCriteria(new RequestCriteria($request));
        $imagenResultados = $this->imagenResultadoRepository->all();

        return view('imagen_resultados.index')
            ->with('imagenResultados', $imagenResultados);
    }

    /**
     * Show the form for creating a new ImagenResultado.
     *
     * @return Response
     */
    public function create()
    {
        return view('imagen_resultados.create');
    }

    /**
     * Store a newly created ImagenResultado in storage.
     *
     * @param CreateImagenResultadoRequest $request
     *
     * @return Response
     */
    public function store(CreateImagenResultadoRequest $request)
    {
        $input = $request->all();

        $imagenResultado = $this->imagenResultadoRepository->create($input);

        Flash::success('Imagen Resultado saved successfully.');

        return redirect(route('imagenResultados.index'));
    }

    /**
     * Display the specified ImagenResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imagenResultado = $this->imagenResultadoRepository->findWithoutFail($id);

        if (empty($imagenResultado)) {
            Flash::error('Imagen Resultado not found');

            return redirect(route('imagenResultados.index'));
        }

        return view('imagen_resultados.show')->with('imagenResultado', $imagenResultado);
    }

    /**
     * Show the form for editing the specified ImagenResultado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imagenResultado = $this->imagenResultadoRepository->findWithoutFail($id);

        if (empty($imagenResultado)) {
            Flash::error('Imagen Resultado not found');

            return redirect(route('imagenResultados.index'));
        }

        return view('imagen_resultados.edit')->with('imagenResultado', $imagenResultado);
    }

    /**
     * Update the specified ImagenResultado in storage.
     *
     * @param  int              $id
     * @param UpdateImagenResultadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImagenResultadoRequest $request)
    {
        $imagenResultado = $this->imagenResultadoRepository->findWithoutFail($id);

        if (empty($imagenResultado)) {
            Flash::error('Imagen Resultado not found');

            return redirect(route('imagenResultados.index'));
        }

        $imagenResultado = $this->imagenResultadoRepository->update($request->all(), $id);

        Flash::success('Imagen Resultado updated successfully.');

        return redirect(route('imagenResultados.index'));
    }

    /**
     * Remove the specified ImagenResultado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imagenResultado = $this->imagenResultadoRepository->findWithoutFail($id);

        if (empty($imagenResultado)) {
            Flash::error('Imagen Resultado not found');

            return redirect(route('imagenResultados.index'));
        }

        $this->imagenResultadoRepository->delete($id);

        Flash::success('Imagen Resultado deleted successfully.');

        return redirect(route('imagenResultados.index'));
    }
}
