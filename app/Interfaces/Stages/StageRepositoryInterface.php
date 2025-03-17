<?php

namespace App\Interfaces\Stages;

use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\StoreStageRequest;

interface StageRepositoryInterface{

    public function index();

    public function store(StoreStageRequest $request, ToastrFactory $flasher);

    public function update(StoreStageRequest $request, ToastrFactory $flasher);

    public function destroy(Request $request, ToastrFactory $flasher);
}
