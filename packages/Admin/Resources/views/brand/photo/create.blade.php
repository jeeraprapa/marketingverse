@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <header>
                <h5 class="h3 mb-0 text-gray-800"> Brand </h5>
                <h3 class="text-muted">{{$brand->name}}</h3>
            </header>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::brand.view',$brand->id)}}" class="btn btn-secondary">
                <i class="fas fa-chevron-circle-left"></i>
                Brand </a>
        </div>
    </div>

    <form action="{{route('admin::brand.photo.store',$brand->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"> Save </button>
    </form>
@stop
