@extends('layouts.master')
@section('css')
@flasher_render
@section('title')
    {{ trans('sidebar_trans.Sections') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('sidebar_trans.Sections') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a class="button x-small" href="#" data-toggle="modal" data-target="#exampleModal">
                        {{ trans('sections_trans.add_section') }}</a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="accordion gray plus-icon round">

                            @foreach ($stages as $stage)

                                <div class="acd-group">
                                    <a href="#" class="acd-heading">{{ $stage->name }}</a>
                                    <div class="acd-des">

                                        <div class="row">
                                            <div class="col-xl-12 mb-30">
                                                <div class="card card-statistics h-100">
                                                    <div class="card-body">
                                                        <div class="d-block d-md-flex justify-content-between">
                                                            <div class="d-block">
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-15">
                                                            <table class="table center-aligned-table mb-0">
                                                                <thead>
                                                                <tr class="text-dark">
                                                                    <th>ID</th>
                                                                    <th>{{ trans('sections_trans.name') }}</th>
                                                                    <th>{{ trans('classrooms_trans.name') }}</th>
                                                                    <th>{{ trans('sections_trans.status') }}</th>
                                                                    <th>{{ trans('stages_trans.proccesses') }}</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @foreach ($stage->sections as $list_sections)
                                                                <!-- sections
                                                                هو اسم العلاقة بالموديل
                                                                Stage -->

                                                                <!-- $stage
                                                                هو عداد الحلقة الخارجية
                                                                (level 1) -->

                                                                <!-- list_sections
                                                                عداد هذه الحلقة
                                                                (level 2) -->

                                                                    <tr>
                                                                        <td>{{ $list_sections->id }}</td>
                                                                        <td>{{ $list_sections->name }}</td>
                                                                        <td>{{ $list_sections->classroom->name }}
                                                                            <!-- classroom
                                                                            اسم العلاقة بموديل
                                                                            Section -->
                                                                        </td>
                                                                        <td>
                                                                            @if ($list_sections->status === 'active')
                                                                                <label class="badge badge-success">{{ trans('sections_trans.active') }}</label>
                                                                            @else
                                                                                <label class="badge badge-danger">{{ trans('sections_trans.inactive') }}</label>
                                                                            @endif
                                                                        </td>
                                                                        <td>

                                                                            <a href="#"
                                                                               class="btn btn-outline-info btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#edit{{ $list_sections->id }}">{{ trans('sections_trans.edit_section') }}</a>
                                                                            <a href="#"
                                                                               class="btn btn-outline-danger btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#delete{{ $list_sections->id }}">{{ trans('sections_trans.delete_section') }}</a>
                                                                        </td>
                                                                    </tr>


                                                                    @include('Pages.Sections.edit')

                                                                    @include('Pages.Sections.delete')

                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>

                    <!--اضافة قسم جديد -->
                    @include('Pages.Sections.create')


                </div>
            </div>
        </div>
        <!-- row closed -->
        @endsection
        @section('js')

            <script>
                $(document).ready(function () {
                    $('select[name="stage_id"]').on('change', function () {
                        var stage_id = $(this).val();
                        if (stage_id) {
                            $.ajax({
                                url: "{{ URL::to('classes') }}/" + stage_id,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {
                                    $('select[name="classroom_id"]').empty();
                                    $.each(data, function (key, value) {
                                        $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                                    });
                                },
                            });
                        } else {
                            console.log('AJAX load did not work');
                        }
                    });
                });

            </script>

@endsection
