@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bills.store') }}">
                        @csrf

                        {{-- <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Room</label>
                            <div class="col-md-6">
                                @foreach ($rooms as $room)
                                    <div class="form-check">
                                        <input type="radio" name="room_name" value="{{ $room->room_name }}">
                                        <label for="">{{ $room->room_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Select Room Category</label>
                            <div class="col-md-6">
                                <select name="category_id" class="form-select form-select-sm">
                                    @foreach ($roomCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Start') }}</label>
                            <div class="col-md-6">
                                <input id="date_start" name="date_start" type="text" class="form-control @error('date_start') is-invalid @enderror" >
                                @error('date_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Finish') }}</label>
                            <div class="col-md-6">
                                <input id="date_finish" name="date_finish" type="text" class="form-control @error('date_finish') is-invalid @enderror" >
                                @error('date_finish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="client_name" name="client_name" type="text" class="form-control @error('client_name') is-invalid @enderror" >
                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CMND') }}</label>
                            <div class="col-md-6">
                                <input id="CMND" name="CMND" type="text" class="form-control @error('CMND') is-invalid @enderror" >
                                @error('CMND')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>
                            <div class="col-md-6">
                                <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" >
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Payment method</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="payment" value="0" checked>
                                    <label for="">Cash</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="payment" value="1">
                                    <label for="">Bank Card</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
