@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800"> Add Admin </h5>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::admin')}}" class="btn btn-primary"> Back </a>
        </div>
    </div>

    {{Form::open(['route'=>'admin::admin.store','method'=>'post'])}}
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                {{Form::label('name',null,['class'=>'form-label'])}}
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <div class="col-12 col-md-6 mb-3">
                {{Form::label('email',null,['class'=>'form-label'])}}
                {{Form::email('email',null,['class'=>'form-control'])}}
            </div>
            <div class="col-12 col-md-6 mb-3">
                {{Form::label('password',null,['class'=>'form-label'])}}
                {{Form::password('password',['class'=>'form-control'])}}
            </div>
            <div class="col-12 col-md-6 mb-3">
                {{Form::label('password_confirmation',null,['class'=>'form-label'])}}
                {{Form::password('password_confirmation',['class'=>'form-control'])}}
            </div>

            <div class="col-12">
                {{Form::submit('save',['class'=>'btn btn-success'])}}
                {{Form::reset('reset',['class'=>'btn btn-secondary'])}}
            </div>
        </div>
    {{Form::close()}}
@stop
