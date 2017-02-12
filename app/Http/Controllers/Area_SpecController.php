<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArea_SpecRequest;
use App\Http\Requests\UpdateArea_SpecRequest;
use App\Repositories\Area_SpecRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Area_SpecController extends AppBaseController
{
    /** @var  Area_SpecRepository */
    private $areaSpecRepository;

    public function __construct(Area_SpecRepository $areaSpecRepo)
    {
        $this->areaSpecRepository = $areaSpecRepo;
    }

    /**
     * Display a listing of the Area_Spec.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaSpecRepository->pushCriteria(new RequestCriteria($request));
        $areaSpecs = $this->areaSpecRepository->all();

        return view('area__specs.index')
            ->with('areaSpecs', $areaSpecs);
    }

    /**
     * Show the form for creating a new Area_Spec.
     *
     * @return Response
     */
    public function create()
    {
        return view('area__specs.create');
    }

    /**
     * Store a newly created Area_Spec in storage.
     *
     * @param CreateArea_SpecRequest $request
     *
     * @return Response
     */
    public function store(CreateArea_SpecRequest $request)
    {
        $input = $request->all();

        $areaSpec = $this->areaSpecRepository->create($input);

        Flash::success('Area  Spec saved successfully.');

        return redirect(route('areaSpecs.index'));
    }

    /**
     * Display the specified Area_Spec.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaSpec = $this->areaSpecRepository->findWithoutFail($id);

        if (empty($areaSpec)) {
            Flash::error('Area  Spec not found');

            return redirect(route('areaSpecs.index'));
        }

        return view('area__specs.show')->with('areaSpec', $areaSpec);
    }

    /**
     * Show the form for editing the specified Area_Spec.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaSpec = $this->areaSpecRepository->findWithoutFail($id);

        if (empty($areaSpec)) {
            Flash::error('Area  Spec not found');

            return redirect(route('areaSpecs.index'));
        }

        return view('area__specs.edit')->with('areaSpec', $areaSpec);
    }

    /**
     * Update the specified Area_Spec in storage.
     *
     * @param  int              $id
     * @param UpdateArea_SpecRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArea_SpecRequest $request)
    {
        $areaSpec = $this->areaSpecRepository->findWithoutFail($id);

        if (empty($areaSpec)) {
            Flash::error('Area  Spec not found');

            return redirect(route('areaSpecs.index'));
        }

        $areaSpec = $this->areaSpecRepository->update($request->all(), $id);

        Flash::success('Area  Spec updated successfully.');

        return redirect(route('areaSpecs.index'));
    }

    /**
     * Remove the specified Area_Spec from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaSpec = $this->areaSpecRepository->findWithoutFail($id);

        if (empty($areaSpec)) {
            Flash::error('Area  Spec not found');

            return redirect(route('areaSpecs.index'));
        }

        $this->areaSpecRepository->delete($id);

        Flash::success('Area  Spec deleted successfully.');

        return redirect(route('areaSpecs.index'));
    }
}
