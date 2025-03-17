<div class="modal fade" id="edit{{ $stage->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{ trans('stages_trans.edit_stage') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Stages.update', 'test') }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name"
                                class="mr-sm-2">{{ trans('stages_trans.stage_name_ar') }}
                                </label>
                            <input id="name" type="text" name="name"
                                class="form-control"
                                value="{{ $stage->getTranslation('name', 'ar') }}"
                                required>
                            <input id="id" type="hidden" name="id" class="form-control"
                                value="{{ $stage->id }}">
                        </div>
                        <div class="col">
                            <label for="name_en"
                                class="mr-sm-2">{{ trans('stages_trans.stage_name_en') }}
                                </label>
                            <input type="text" class="form-control"
                                value="{{ $stage->getTranslation('name', 'en') }}"
                                name="name_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            for="exampleFormControlTextarea1">{{ trans('stages_trans.notes') }}
                            </label>
                        <textarea class="form-control" name="notes"
                            id="exampleFormControlTextarea1"
                            rows="3">{{ $stage->notes }}</textarea>
                    </div>
                    <br><br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('stages_trans.Close') }}</button>
                        <button type="submit"
                            class="btn btn-success">{{ trans('stages_trans.Submit') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
