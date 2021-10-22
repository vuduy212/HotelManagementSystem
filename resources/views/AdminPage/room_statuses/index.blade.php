@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mt-4">status's Status Management</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to status's Status Management !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New status's Status</a>
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
                            <th scope="col">Room's Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Time</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomStatus as $status)
                            <tr>
                                <th scope="row">{{$status->id}}</th>
                                <td>{{$status->room_name}}</td>
                                <td>{{$status->status_name}}</td>
                                <td>{{$status->time}}</td>
                                <td>
                                    <a href="{{ route('categories.show', $status->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('categories.edit', $status->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('categories.destroy', $status) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$roomStatus->appends(request()->only('key','number'))->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
