<?php

namespace App\Http\Controllers\Stages;
use App\Interfaces\Stages\StageRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\StoreStageRequest;

class StageController extends Controller
{
    private $Stages;

    public function __construct(StageRepositoryInterface $Stages){
        $this->Stages = $Stages;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Stages->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStageRequest $request, ToastrFactory $flasher)
    {
        return $this->Stages->store($request, $flasher);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStageRequest $request, ToastrFactory $flasher)
    {
        return $this->Stages->update($request, $flasher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, ToastrFactory $flasher)
    {
        return $this->Stages->destroy($request, $flasher);
    }
}
