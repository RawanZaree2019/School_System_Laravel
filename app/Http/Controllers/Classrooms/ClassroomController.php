<?php

namespace App\Http\Controllers\Classrooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroomRequest;
use App\Interfaces\Classrooms\ClassroomRepositoryInterface;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    private $Classrooms;

    public function __construct(ClassroomRepositoryInterface $Classrooms){
        $this->Classrooms = $Classrooms;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Classrooms->index();
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
    public function store(StoreClassroomRequest $request, ToastrFactory $flasher)
    {
        return $this->Classrooms->store($request, $flasher);
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
    public function update(StoreClassroomRequest $request, ToastrFactory $flasher)
    {
        return $this->Classrooms->update($request, $flasher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, ToastrFactory $flasher)
    {
        return $this->Classrooms->destroy($request, $flasher);
    }

    public function delete_all_records(Request $request, ToastrFactory $flasher)
    {
        return $this->Classrooms->delete_all_records($request, $flasher);
    }

    public function filter_classrooms(Request $request)
    {
        return $this->Classrooms->filter_classrooms($request);
    }
}
