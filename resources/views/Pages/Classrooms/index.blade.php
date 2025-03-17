@extends('layouts.master')
@section('css')
    @flasher_render
    <style>
        #example-select-all {
            accent-color: #287bff;
        }

        input[type="checkbox"] {
            accent-color: #287bff;
        }
    </style>


@section('title')
    {{ trans('sidebar_trans.Classrooms') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{ trans('sidebar_trans.Classrooms') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">

<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                {{ trans('classrooms_trans.add_classroom') }}
            </button>

            <button type="button" class="btn btn-danger" id="btn_delete_all">
                {{ trans('classrooms_trans.delete_marked_records') }}
            </button>

            <br><br>

            <form action="{{ route('filter_classrooms') }}" method="POST">
                @csrf
                <select class="selectpicker" data-style="btn btn-info" name="stage_id" required
                        onchange="this.form.submit()">
                    <option value="" selected disabled>{{ trans('classrooms_trans.filter_classrooms_by_stages') }}</option>
                    @foreach ($stages as $stage)
                        <option value="{{ $stage->id }}">{{ $stage->name }}</option>
                    @endforeach
                </select>
            </form>

            <br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th><input name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)" /></th>
                            <th>ID</th>
                            <th>{{ trans('classrooms_trans.name') }}</th>
                            <th>{{ trans('stages_trans.name_stage') }}</th>
                            <th>{{ trans('stages_trans.proccesses') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                    @if (isset($filter_classrooms_by_stages))

                        <?php $list_classes = $filter_classrooms_by_stages; ?>
                    @else

                        <?php $list_classes = $classrooms; ?>
                    @endif

                        @foreach ($list_classes as $classroom)
                            <tr>
                                <td>
                                    <input value="{{ $classroom->id }}" class="box1" type="checkbox">
                                </td>
                                <td>{{ $classroom->id }}</td>
                                <td>{{ $classroom->name }}</td>
                                <td>{{ $classroom->Stage->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $classroom->id }}"
                                        title="{{ trans('classrooms_trans.edit_classroom') }}"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $classroom->id }}"
                                        title="{{ trans('classrooms_trans.delete_classroom') }}"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            @include('Pages.Classrooms.edit')
                            @include('Pages.Classrooms.delete')

                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<!-- add_modal_class -->
@include('Pages.Classrooms.create')

<!-- delete_all -->
@include('Pages.Classrooms.delete_all')

</div>
</div>

</div>

<!-- row closed -->
@endsection
@section('js')

<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = new Array();
            $("#datatable input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_all').modal('show')
                $('input[id="delete_all_id"]').val(selected);
            }
        });
    });

</script>
@endsection
