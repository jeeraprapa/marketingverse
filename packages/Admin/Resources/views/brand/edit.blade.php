@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800"> Edit Brand </h5>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::brand')}}" class="btn btn-primary"> Back </a>
        </div>
    </div>

    {{Form::model($brand,['url'=>route('admin::brand.update',$brand->id),'method'=>'patch','files'=>true])}}
        @include('admin::brand.form')
    {{Form::close()}}
@stop
