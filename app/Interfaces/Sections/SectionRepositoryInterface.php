<?php

namespace App\Interfaces\Sections;

use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\StoreSectionRequest;

interface SectionRepositoryInterface
{
    public function index();

    public function getClasses($id);

    public function store(StoreSectionRequest $request, ToastrFactory $flasher);

    public function update(StoreSectionRequest $request, ToastrFactory $flasher);

    public function destroy(Request $request, ToastrFactory $flasher);


}
