@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mt-4">Users Management</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to Users Management !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
                </div>
                <form action="{{ route('users.index') }}" method="GET" class="md-3 d-flex">
                    <input type="text" class="form-control" name="key" value="{{request('key')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                <div class="card-body">

                    <table class="table">
                        {{-- <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="status" value="0" @if($users->roles == 'admin') checked @endif>
                                    <label for="">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" @if($users->roles == 'room_manager') checked @endif>
                                    <label for="">Le tan</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" @if($users->roles == 'receptionist') checked @endif>
                                    <label for="">QUan ly phong</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" @if($users->roles == 'client') checked @endif>
                                    <label for="">Khach hang</label>
                                </div>
                            </div>
                        </div> --}}
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$users->appends(request()->only('key','number'))->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
