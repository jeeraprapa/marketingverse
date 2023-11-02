@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800"> Edit Admin </h5>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::admin')}}" class="btn btn-primary"> Back </a>
        </div>
    </div>


    {{Form::model($admin,['url'=>route('admin::admin.update',$admin->id),'method'=>'patch'])}}
        <div class="row">
            @include('admin::admin._form')
        </div>
    {{Form::close()}}
@stop
