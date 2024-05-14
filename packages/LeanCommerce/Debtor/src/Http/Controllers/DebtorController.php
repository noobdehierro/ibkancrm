<?php

namespace LeanCommerce\Debtor\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LeanCommerce\Debtor\Datagrids\DebtorDataGrid;
use LeanCommerce\Debtor\Repositories\DebtorRepository;

class DebtorController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $debtorRepository;

    public function __construct(DebtorRepository $debtorRepository)
    {
        $this->debtorRepository = $debtorRepository;

        request()->request->add(['entity_type' => 'debtors']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(\LeanCommerce\Debtor\Datagrids\DebtorDataGrid::class)->toJson();
        }

        // $debtors = $debtorRepository->all();

        // return view('debtor::index', compact('debtors'));
        // dd($this->debtorRepository->all());

        return view('debtor::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
