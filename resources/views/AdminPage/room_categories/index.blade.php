@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mt-4">Room Categories Management</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to Room Categories Management !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Room Categories</a>
                </div>
                <form action="{{ route('categories.index') }}" method="GET" class="md-3 d-flex">
                    <input type="text" class="form-control" name="key" value="{{request('key')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Images</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomCategories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->images}}</td>
                                <td>{{$category->price}}</td>
                                <td>
                                    <a href="{{ route('categories.show', $category->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('categories.edit', $category->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$roomCategories->appends(request()->only('key','number'))->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
