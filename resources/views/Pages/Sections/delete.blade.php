<div class="modal fade" id="delete{{ $list_sections->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
       <div class="modal-header">
           <h5 style="font-family: 'Cairo', sans-serif;"
               class="modal-title"
               id="exampleModalLabel">
               {{ trans('sections_trans.delete_section') }}
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
               action="{{ route('Sections.destroy', 'test') }}"
               method="post">
               @method('DELETE')
               @csrf
               {{ trans('sections_trans.Warning') }}
               <input id="id" type="hidden"
                      name="id"
                      class="form-control"
                      value="{{ $list_sections->id }}">
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
</div>
