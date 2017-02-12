<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBaseLegalRequest;
use App\Http\Requests\UpdateBaseLegalRequest;
use App\Repositories\BaseLegalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BaseLegalController extends AppBaseController
{
    /** @var  BaseLegalRepository */
    private $baseLegalRepository;

    public function __construct(BaseLegalRepository $baseLegalRepo)
    {
        $this->baseLegalRepository = $baseLegalRepo;
    }

    /**
     * Display a listing of the BaseLegal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->baseLegalRepository->pushCriteria(new RequestCriteria($request));
        $baseLegals = $this->baseLegalRepository->all();

        return view('base_legals.index')
            ->with('baseLegals', $baseLegals);
    }

    /**
     * Show the form for creating a new BaseLegal.
     *
     * @return Response
     */
    public function create()
    {
        return view('base_legals.create');
    }

    /**
     * Store a newly created BaseLegal in storage.
     *
     * @param CreateBaseLegalRequest $request
     *
     * @return Response
     */
    public function store(CreateBaseLegalRequest $request)
    {
        $input = $request->all();

        $baseLegal = $this->baseLegalRepository->create($input);

        Flash::success('Base Legal saved successfully.');

        return redirect(route('baseLegals.index'));
    }

    /**
     * Display the specified BaseLegal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $baseLegal = $this->baseLegalRepository->findWithoutFail($id);

        if (empty($baseLegal)) {
            Flash::error('Base Legal not found');

            return redirect(route('baseLegals.index'));
        }

        return view('base_legals.show')->with('baseLegal', $baseLegal);
    }

    /**
     * Show the form for editing the specified BaseLegal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $baseLegal = $this->baseLegalRepository->findWithoutFail($id);

        if (empty($baseLegal)) {
            Flash::error('Base Legal not found');

            return redirect(route('baseLegals.index'));
        }

        return view('base_legals.edit')->with('baseLegal', $baseLegal);
    }

    /**
     * Update the specified BaseLegal in storage.
     *
     * @param  int              $id
     * @param UpdateBaseLegalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBaseLegalRequest $request)
    {
        $baseLegal = $this->baseLegalRepository->findWithoutFail($id);

        if (empty($baseLegal)) {
            Flash::error('Base Legal not found');

            return redirect(route('baseLegals.index'));
        }

        $baseLegal = $this->baseLegalRepository->update($request->all(), $id);

        Flash::success('Base Legal updated successfully.');

        return redirect(route('baseLegals.index'));
    }

    /**
     * Remove the specified BaseLegal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $baseLegal = $this->baseLegalRepository->findWithoutFail($id);

        if (empty($baseLegal)) {
            Flash::error('Base Legal not found');

            return redirect(route('baseLegals.index'));
        }

        $this->baseLegalRepository->delete($id);

        Flash::success('Base Legal deleted successfully.');

        return redirect(route('baseLegals.index'));
    }
}
