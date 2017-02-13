<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormaPresentacionRequest;
use App\Http\Requests\UpdateFormaPresentacionRequest;
use App\Repositories\FormaPresentacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FormaPresentacionController extends AppBaseController
{
    /** @var  FormaPresentacionRepository */
    private $formaPresentacionRepository;

    public function __construct(FormaPresentacionRepository $formaPresentacionRepo)
    {
        $this->formaPresentacionRepository = $formaPresentacionRepo;
    }

    /**
     * Display a listing of the FormaPresentacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->formaPresentacionRepository->pushCriteria(new RequestCriteria($request));
        $formaPresentacions = $this->formaPresentacionRepository->all();

        return view('forma_presentacions.index')
            ->with('formaPresentacions', $formaPresentacions);
    }

    /**
     * Show the form for creating a new FormaPresentacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('forma_presentacions.create');
    }

    /**
     * Store a newly created FormaPresentacion in storage.
     *
     * @param CreateFormaPresentacionRequest $request
     *
     * @return Response
     */
    public function store(CreateFormaPresentacionRequest $request)
    {
        $input = $request->all();

        $formaPresentacion = $this->formaPresentacionRepository->create($input);

        Flash::success('Forma Presentacion saved successfully.');

        return redirect(route('formaPresentacions.index'));
    }

    /**
     * Display the specified FormaPresentacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formaPresentacion = $this->formaPresentacionRepository->findWithoutFail($id);

        if (empty($formaPresentacion)) {
            Flash::error('Forma Presentacion not found');

            return redirect(route('formaPresentacions.index'));
        }

        return view('forma_presentacions.show')->with('formaPresentacion', $formaPresentacion);
    }

    /**
     * Show the form for editing the specified FormaPresentacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formaPresentacion = $this->formaPresentacionRepository->findWithoutFail($id);

        if (empty($formaPresentacion)) {
            Flash::error('Forma Presentacion not found');

            return redirect(route('formaPresentacions.index'));
        }

        return view('forma_presentacions.edit')->with('formaPresentacion', $formaPresentacion);
    }

    /**
     * Update the specified FormaPresentacion in storage.
     *
     * @param  int              $id
     * @param UpdateFormaPresentacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormaPresentacionRequest $request)
    {
        $formaPresentacion = $this->formaPresentacionRepository->findWithoutFail($id);

        if (empty($formaPresentacion)) {
            Flash::error('Forma Presentacion not found');

            return redirect(route('formaPresentacions.index'));
        }

        $formaPresentacion = $this->formaPresentacionRepository->update($request->all(), $id);

        Flash::success('Forma Presentacion updated successfully.');

        return redirect(route('formaPresentacions.index'));
    }

    /**
     * Remove the specified FormaPresentacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formaPresentacion = $this->formaPresentacionRepository->findWithoutFail($id);

        if (empty($formaPresentacion)) {
            Flash::error('Forma Presentacion not found');

            return redirect(route('formaPresentacions.index'));
        }

        $this->formaPresentacionRepository->delete($id);

        Flash::success('Forma Presentacion deleted successfully.');

        return redirect(route('formaPresentacions.index'));
    }
}
