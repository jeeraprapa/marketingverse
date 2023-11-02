@extends('admin::layout.base')

@section('content')
    <div class="bg-white d-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800"> Admin </h5>
        </div>
        <div class="btn-wrapper">
            <a href="{{route('admin::admin.create')}}" class="btn btn-primary"> Add Admin </a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>
                <a href="{{route('admin::admin.edit',$admin->id)}}" class="btn btn-primary">
                    <i class="fas fa-pen"></i>
                </a>
                <form action="{{route('admin::admin.delete',$admin->id)}}" method="POST" class="d-inline-block">
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
            <td colspan="4">
                {{$admins->links()}}
            </td>
        </tr>
        </tbody>
        </tbody>
    </table>
@stop
