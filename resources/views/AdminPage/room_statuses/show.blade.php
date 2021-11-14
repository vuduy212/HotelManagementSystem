@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Room Status {{$roomStatus->id}}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Room ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$roomStatus->id}}</th>
                                <td>{{$roomStatus->room_id}}</td>
                                <td>{{$roomStatus->status}}</td>
                                <td>{{$roomStatus->time}}</td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
