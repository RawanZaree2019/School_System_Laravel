<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSectionRequest;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $Sections;

    public function __construct(SectionRepositoryInterface $Sections){
        $this->Sections = $Sections;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Sections->index();
    }

    public function getClasses($id)
    {
        return $this->Sections->getClasses($id);
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
    public function store(StoreSectionRequest $request, ToastrFactory $flasher)
    {
        return $this->Sections->store($request, $flasher);
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
    public function update(StoreSectionRequest $request, ToastrFactory $flasher)
    {
        return $this->Sections->update($request, $flasher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, ToastrFactory $flasher)
    {
        return $this->Sections->destroy($request, $flasher);
    }
}
