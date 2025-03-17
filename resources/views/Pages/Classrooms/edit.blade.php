<!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $classroom->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                   id="exampleModalLabel">
                   {{ trans('classrooms_trans.edit_classroom') }}
               </h5>
               <button type="button" class="close" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <!-- edit_form -->
               <form action="{{ route('Classrooms.update', 'test') }}" method="post">
                   @method('PATCH')
                   @csrf
                   <div class="row">
                       <div class="col">
                           <label for="Name"
                                  class="mr-sm-2">{{ trans('classrooms_trans.name_ar') }}</label>
                           <input id="name" type="text" name="name"
                                  class="form-control"
                                  value="{{ $classroom->getTranslation('name', 'ar') }}"
                                  required>
                           <input id="id" type="hidden" name="id" class="form-control"
                                  value="{{ $classroom->id }}">
                       </div>
                       <div class="col">
                           <label for="name_en"
                                  class="mr-sm-2">{{ trans('classrooms_trans.name_en') }}</label>
                           <input type="text" class="form-control"
                                  value="{{ $classroom->getTranslation('name', 'en') }}"
                                  name="name_en" required>
                       </div>
                   </div><br>
                   <div class="form-group">
                       <label
                           for="exampleFormControlTextarea1">{{ trans('stages_trans.name_stage') }}</label>
                       <select class="form-control form-control-lg"
                               id="exampleFormControlSelect1" name="stage_id">
                           <option value="{{ $classroom->Stage->id }}">
                            {{ $classroom->Stage->name }}
                           </option>
                           @foreach ($stages as $stage)
                               <option value="{{ $stage->id }}">
                                   {{ $stage->name }}
                               </option>
                           @endforeach
                       </select>

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
