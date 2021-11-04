@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Room {{$room->id}}</div>

                <div class="card-body">
                    <form action="{{ route('rooms.update', $room) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                            <div class="col-md-6">
                                <input id="room_name" name="room_name" type="text" value="{{ $room->room_name }}" class="form-control{{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <input id="description" name="description" type="text" value="{{ $room->description }}" class="form-control {{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Room Category') }}</label>
                            <div class="col-md-6">
                                @foreach ($roomCategories as $category)
                                    <div class="form-check">
                                        <input type="radio" name="category_name" id="category_name" value="{{ $category->category_name }}"
                                        @if($room->category_name == $category->category_name) checked @endif>
                                        <label for="">{{ $category->category_name }}</label>
                                    </div>
                                @endforeach
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
