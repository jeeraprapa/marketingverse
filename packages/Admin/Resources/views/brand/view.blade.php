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
            <a href="{{route('admin::brand')}}" class="btn btn-secondary">
                <i class="fas fa-chevron-circle-left"></i>
                Brand </a>
            <a href="{{route('admin::brand.poster.create',$brand->id)}}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Poster </a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Poster</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
            @foreach($brand->getMedia('posters') as $poster)
                <tr>
                    <td>{{$poster->id}}</td>
                    <td>
                        <img src="{{$poster->getUrl()}}" alt="{{$brand->name}}" width="100">
                    </td>
                    <td>
                        <form action="{{route('admin::brand.poster.destroy',['brand'=>$brand->id,'poster'=>$poster->id])}}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
