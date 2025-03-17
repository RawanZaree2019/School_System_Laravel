@extends('layouts.master') @section('css') @flasher_render @section('title')
{{ trans("stages_trans.Stages") }}
@stop @endsection @section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans("stages_trans.Stages") }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                <li class="breadcrumb-item">
                    <a href="#" class="default-color">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    {{ trans("stages_trans.Stages") }}
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <h3>Errors</h3>
        <ul>
            @foreach($errors->all() as $error)
                    {{ $error }}
            @endforeach

        </ul>
    </div>
    @endif


<div class="row">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <button
                    type="button"
                    class="button x-small"
                    data-toggle="modal"
                    data-target="#exampleModal"
                >
                    {{ trans("stages_trans.add_stage") }}
                </button>
                <br /><br />
                <div class="table-responsive">
                    <table
                        id="datatable"
                        class="table table-striped table-bordered p-0"
                    >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ trans("stages_trans.name_stage") }}</th>
                                <th>{{ trans("stages_trans.notes") }}</th>
                                <th>{{ trans("stages_trans.proccesses") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stages as $stage)
                            <tr>
                                <td>{{ $stage->id }}</td>
                                <td>{{ $stage->name }}</td>
                                <td>{{ $stage->notes }}</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-info btn-sm"
                                        data-toggle="modal"
                                        data-target="#edit{{ $stage->id }}"
                                        title="{{
                                            trans('stage_trans.edit_stage')
                                        }}"
                                    >
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        data-toggle="modal"
                                        data-target="#delete{{ $stage->id }}"
                                        title="{{
                                            trans('stage_trans.delete_stage')
                                        }}"
                                    >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('Pages.Stages.edit')
                            @include('Pages.Stages.delete')
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>{{ trans("stages_trans.name_stage") }}</th>
                                <th>{{ trans("stages_trans.notes") }}</th>
                                <th>{{ trans("stages_trans.proccesses") }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('Pages.Stages.create')
</div>

@endsection
@section('js')

@endsection
