@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Reservation of {{ $reservation->client_name }} -
                        {{ $reservation->phone }}
                        -
                        {{ $reservation->email }}</div>
                    <div class="card-body">
                        <form action="{{ route('updateReservation', $reservation) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Client name') }}</label>
                                <div class="col-md-6">
                                    <input id="client_name" name="client_name" value="{{ $reservation->client_name }}"
                                        type="" class="form-control @error('client_name') is-invalid @enderror">
                                    @error('client_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('ID Card') }}</label>
                                <div class="col-md-6">
                                    <input id="ID_Card" name="ID_Card" value="{{ $reservation->ID_Card }}"
                                        type="" class="form-control @error('ID_Card') is-invalid @enderror">
                                    @error('ID_Card')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" name="email" value="{{ $reservation->email }}" type=""
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" name="phone" value="{{ $reservation->phone }}" type=""
                                        class="form-control @error('checkin') is-invalid @enderror">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">Payment method</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="radio" name="payment" value="Cash"
                                            @if ($reservation->payment == 'cash') checked @endif>
                                        <label for="">Cash</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="payment" value="Bank Card"
                                            @if ($reservation->payment == 'Bank Card') checked @endif>
                                        <label for="">Bank Card</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">Status</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Unconfirm"
                                            @if ($reservation->status == 'Unconfirm') checked @endif>
                                        <label for="">Unconfirm</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Confirmed"
                                            @if ($reservation->status == 'Confirmed') checked @endif>
                                        <label for="">Confirmed</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Using"
                                            @if ($reservation->status == 'Using') checked @endif>
                                        <label for="">Using</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Paid"
                                            @if ($reservation->status == 'Paid') checked @endif>
                                        <label for="">Paid</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Cancelled3"
                                            @if ($reservation->status == 'Cancelled') checked @endif>
                                        <label for="">Cancelled</label>
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
