<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="font-family: 'Cairo', sans-serif;"
                id="exampleModalLabel">
                {{ trans('sections_trans.add_section') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <form action="{{ route('Sections.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <input type="text" name="name_section_ar" class="form-control"
                               placeholder="{{ trans('sections_trans.section_name_ar') }}">
                    </div>

                    <div class="col">
                        <input type="text" name="name_section_en" class="form-control"
                               placeholder="{{ trans('sections_trans.section_name_en') }}">
                    </div>

                </div>
                <br>


                <div class="col">
                    <label for="inputName"
                           class="control-label">{{ trans('sections_trans.name') }}</label>
                    <select name="stage_id" class="custom-select"
                            onchange="console.log($(this).val())">
                        <!--placeholder-->
                        <option value="" selected
                                disabled>{{ trans('sections_trans.select_stage') }}
                        </option>
                        @foreach ($list_stages as $list_stage)
                            <option value="{{ $list_stage->id }}"> {{ $list_stage->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>

                <div class="col">
                    <label for="inputName"
                           class="control-label">{{ trans('classrooms_trans.name') }}</label>
                    <select name="classroom_id" class="custom-select">

                    </select>
                </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">{{ trans('stages_trans.Close') }}</button>
            <button type="submit"
                    class="btn btn-danger">{{ trans('stages_trans.Submit') }}</button>
        </div>
        </form>
    </div>
</div>
</div>
