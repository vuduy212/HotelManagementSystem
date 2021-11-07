@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mt-4">Room's Status Management</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to Room's Status Management !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    @receptionist
                    <a href="{{ route('status.create') }}" class="btn btn-primary">Create New Room's Status</a>
                    @endif
                </div>
                <form action="{{ route('status.index') }}" method="GET" class="md-3 d-flex">
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
                            @receptionist
                            <th scope="col">Actions</th>
                            @endif
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomStatus as $status)
                            <tr>
                                <th scope="row">{{$status->id}}</th>
                                <td>{{$status->room_name}}</td>
                                <td>{{$status->status}}</td>
                                <td>{{$status->time}}</td>
                                @receptionist
                                <td>
                                    <a href="{{ route('status.show', $status->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('status.edit', $status->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('status.destroy', $status) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                                @endif
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
