@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="title">{{trans('parent_trans.mother_name')}}</label>
                        <input type="text" wire:model="mother_name" class="form-control">
                        @error('mother_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title">{{trans('parent_trans.mother_name_en')}}</label>
                        <input type="text" wire:model="mother_name_en" class="form-control">
                        @error('mother_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="title">{{trans('parent_trans.Job')}}</label>
                        <input type="text" wire:model="mother_Job" class="form-control">
                        @error('mother_Job')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="title">{{trans('parent_trans.Job_en')}}</label>
                        <input type="text" wire:model="mother_Job_en" class="form-control">
                        @error('mother_Job_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{trans('parent_trans.national_id')}}</label>
                        <input type="text" wire:model.blur="mother_national_id" class="form-control">
                        @error('mother_national_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">{{trans('parent_trans.phone')}}</label>
                        <input type="text" wire:model.blur="mother_phone" class="form-control">
                        @error('mother_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">{{trans('parent_trans.nationality')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_nationality">
                            <option selected>{{trans('parent_trans.Choose')}}...</option>
                            @foreach($nationalities as $nationality)
                                <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="inputState">{{trans('parent_trans.type_blood')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_type_blood">
                            <option selected>{{trans('parent_trans.Choose')}}...</option>
                            @foreach($type_bloods as $type_blood)
                                <option value="{{$type_blood->id}}">{{$type_blood->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_type_blood')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="inputZip">{{trans('parent_trans.religion')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_religion">
                            <option selected>{{trans('parent_trans.Choose')}}...</option>
                            @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_religion')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{trans('parent_trans.address')}}</label>
                    <textarea class="form-control" wire:model="mother_address" id="exampleFormControlTextarea1"
                              rows="4"></textarea>
                    @error('mother_address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                        wire:click="secondStepSubmit">{{trans('parent_trans.next')}}</button>

                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                        {{trans('parent_trans.back')}}
                </button>
            </div>
        </div>
    </div>

