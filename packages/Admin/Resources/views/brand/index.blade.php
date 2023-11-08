@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800"> Brand </h5>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::brand.create')}}" class="btn btn-primary"> Add Brand </a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Thumbnail</td>
            <td>Name</td>
            <td>Description</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>
                    @if($brand->getFirstMediaUrl('thumbnail'))
                        <img src="{{$brand->getFirstMediaUrl('thumbnail')}}" alt="{{$brand->name}}" width="100">
                    @endif
                </td>
                <td>{{$brand->name}}</td>
                <td>{{$brand->description}}</td>
                <td>
                    <a href="{{route('admin::brand.view',$brand->id)}}" class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="{{route('admin::brand.edit',$brand->id)}}" class="btn btn-primary">
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="{{route('admin::brand.destroy',$brand->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tbody>
        <tr>
            <td colspan="5">
                {{$brands->links()}}
            </td>
        </tr>
        </tbody>
    </table>
@stop
