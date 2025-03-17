<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{ trans('stages_trans.add_stage') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Stages.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">{{ trans('stages_trans.stage_name_ar') }}</label>
                            <input id="name" type="text" name="name" class="form-control">
                        
                        </div>
                        <div class="col">
                            <label for="name_en" class="mr-sm-2">{{ trans('stages_trans.stage_name_en') }}</label>
                            <input type="text" class="form-control" name="name_en">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ trans('stages_trans.notes') }}</label>
                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">{{ trans('stages_trans.Close') }}</button>
                <button type="submit" class="btn btn-success">{{ trans('stages_trans.Submit') }}</button>
            </div>
            </form>

        </div>
    </div>
</div>
