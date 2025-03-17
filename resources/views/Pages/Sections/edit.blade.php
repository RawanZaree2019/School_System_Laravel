<div class="modal fade" id="edit{{ $list_sections->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title"
               style="font-family: 'Cairo', sans-serif;"
               id="exampleModalLabel">
               {{ trans('sections_trans.edit_section') }}
           </h5>
           <button type="button" class="close"
                   data-dismiss="modal"
                   aria-label="Close">
           <span
               aria-hidden="true">&times;</span>
           </button>
       </div>
       <div class="modal-body">

           <form
               action="{{ route('Sections.update', 'test') }}" method="POST">
               @method('PATCH')
               @csrf
               <div class="row">
                   <div class="col">
                       <input type="text"
                              name="name_section_ar"
                              class="form-control"
                              value="{{ $list_sections->getTranslation('name', 'ar') }}">
                   </div>

                   <div class="col">
                       <input type="text"
                              name="name_section_en"
                              class="form-control"
                              value="{{ $list_sections->getTranslation('name', 'en') }}">
                       <input id="id"
                              type="hidden"
                              name="id"
                              class="form-control"
                              value="{{ $list_sections->id }}">
                   </div>

               </div>
               <br>


               <div class="col">
                   <label for="inputName"
                          class="control-label">{{ trans('stages_trans.name_stage') }}</label>
                   <select name="stage_id"
                           class="custom-select"
                           onclick="console.log($(this).val())">
                       <!--placeholder-->
                       <option
                           value="{{ $stage->id }}">
                           {{ $stage->name }}
                       </option>
                       @foreach ($list_stages as $list_stage)
                           <option
                               value="{{ $list_stage->id }}">
                               {{ $list_stage->name }}
                           </option>
                       @endforeach
                   </select>
               </div>
               <br>

               <div class="col">
                   <label for="inputName"
                          class="control-label">{{ trans('classrooms_trans.name') }}</label>
                   <select name="classroom_id"
                           class="custom-select">

                   </select>
               </div>
               <br>

               <div class="col">
                   <div class="form-check">

                       @if ($list_sections->status === 'active')
                           <input
                               type="checkbox"
                               checked
                               class="form-check-input"
                               name="status"
                               id="exampleCheck1">
                       @else
                           <input
                               type="checkbox"
                               class="form-check-input"
                               name="status"
                               id="exampleCheck1">
                       @endif
                       <label
                           class="form-check-label"
                           for="exampleCheck1">{{ trans('sections_trans.status') }}</label>
                   </div>
               </div>


       </div>
       <div class="modal-footer">
           <button type="button"
                   class="btn btn-secondary"
                   data-dismiss="modal">{{ trans('stages_trans.Close') }}</button>
           <button type="submit"
                   class="btn btn-danger">{{ trans('stages_trans.Submit') }}</button>
       </div>
       </form>
   </div>
</div>
</div>
