@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Room Status {{$roomStatus->id}}</div>

                <div class="card-body">
                    <form action="{{ route('status.update', $roomStatus) }}" method="POST">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Time</label>

                            <div class="col-md-6">
                                <input id="time" type="text" class="form-control" name="time" value="{{ $roomStatus->time }}" autofocus>
                            </div>
                        </div>

                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Room</label>
                            <div class="col-md-6">
                                @foreach ($rooms as $room)
                                    <div class="form-check">
                                        <input type="radio" name="room_name" value="{{ $room->room_name }}"
                                            @if($roomStatus->room_name == $room->room_name) checked @endif>
                                        <label for="">{{ $room->room_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="status" value="0" @if($roomStatus->status == 0) checked @endif>
                                    <label for="">Empty</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" @if($roomStatus->status == 1) checked @endif>
                                    <label for="">Fill</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
