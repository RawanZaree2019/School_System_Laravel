<?php

namespace App\Interfaces\Classrooms;

use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\StoreClassroomRequest;


interface ClassroomRepositoryInterface
{
    public function index();

    public function store(StoreClassroomRequest $request, ToastrFactory $flasher);

    public function update(StoreClassroomRequest $request, ToastrFactory $flasher);

    public function destroy(Request $request, ToastrFactory $flasher);

    public function delete_all_records(Request $request, ToastrFactory $flasher);

    public function filter_classrooms(Request $request);
}
