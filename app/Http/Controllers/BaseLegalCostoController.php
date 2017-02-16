<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBaseLegalCostoRequest;
use App\Http\Requests\UpdateBaseLegalCostoRequest;
use App\Repositories\BaseLegalCostoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BaseLegalCostoController extends AppBaseController
{
    /** @var  BaseLegalCostoRepository */
    private $baseLegalCostoRepository;

    public function __construct(BaseLegalCostoRepository $baseLegalCostoRepo)
    {
        $this->baseLegalCostoRepository = $baseLegalCostoRepo;
    }

    /**
     * Display a listing of the BaseLegalCosto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->baseLegalCostoRepository->pushCriteria(new RequestCriteria($request));
        $baseLegalCostos = $this->baseLegalCostoRepository->all();

        return view('base_legal_costos.index')
            ->with('baseLegalCostos', $baseLegalCostos);
    }

    /**
     * Show the form for creating a new BaseLegalCosto.
     *
     * @return Response
     */
    public function create()
    {
        return view('base_legal_costos.create');
    }

    /**
     * Store a newly created BaseLegalCosto in storage.
     *
     * @param CreateBaseLegalCostoRequest $request
     *
     * @return Response
     */
    public function store(CreateBaseLegalCostoRequest $request)
    {
        $input = $request->all();

        $baseLegalCosto = $this->baseLegalCostoRepository->create($input);

        Flash::success('Base Legal Costo saved successfully.');

        return redirect(route('baseLegalCostos.index'));
    }

    /**
     * Display the specified BaseLegalCosto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $baseLegalCosto = $this->baseLegalCostoRepository->findWithoutFail($id);

        if (empty($baseLegalCosto)) {
            Flash::error('Base Legal Costo not found');

            return redirect(route('baseLegalCostos.index'));
        }

        return view('base_legal_costos.show')->with('baseLegalCosto', $baseLegalCosto);
    }

    /**
     * Show the form for editing the specified BaseLegalCosto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $baseLegalCosto = $this->baseLegalCostoRepository->findWithoutFail($id);

        if (empty($baseLegalCosto)) {
            Flash::error('Base Legal Costo not found');

            return redirect(route('baseLegalCostos.index'));
        }

        return view('base_legal_costos.edit')->with('baseLegalCosto', $baseLegalCosto);
    }

    /**
     * Update the specified BaseLegalCosto in storage.
     *
     * @param  int              $id
     * @param UpdateBaseLegalCostoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBaseLegalCostoRequest $request)
    {
        $baseLegalCosto = $this->baseLegalCostoRepository->findWithoutFail($id);

        if (empty($baseLegalCosto)) {
            Flash::error('Base Legal Costo not found');

            return redirect(route('baseLegalCostos.index'));
        }

        $baseLegalCosto = $this->baseLegalCostoRepository->update($request->all(), $id);

        Flash::success('Base Legal Costo updated successfully.');

        return redirect(route('baseLegalCostos.index'));
    }

    /**
     * Remove the specified BaseLegalCosto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $baseLegalCosto = $this->baseLegalCostoRepository->findWithoutFail($id);

        if (empty($baseLegalCosto)) {
            Flash::error('Base Legal Costo not found');

            return redirect(route('baseLegalCostos.index'));
        }

        $this->baseLegalCostoRepository->delete($id);

        Flash::success('Base Legal Costo deleted successfully.');

        return redirect(route('baseLegalCostos.index'));
    }
}
