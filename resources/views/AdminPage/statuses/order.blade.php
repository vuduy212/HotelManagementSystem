@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="mt-4">Room Order</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Room Order !!</li>
                </ol>
                <div class="card">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card-header">{{ __('Order') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reservation') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name*</label>
                                <div class="col-md-6">
                                    <input id="client_name" value="{{ old('client_name') }}" name="client_name"
                                        type="text" class="form-control @error('client_name') is-invalid @enderror">
                                    {{-- @error('client_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">CMND*</label>
                                <div class="col-md-6">
                                    <input id="CMND" value="{{ old('CMND') }}" name="CMND" type="text"
                                        class="form-control @error('CMND') is-invalid @enderror">
                                    {{-- @error('CMND')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Phone number*</label>
                                <div class="col-md-6">
                                    <input id="phone" value="{{ old('phone') }}" name="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror">
                                    {{-- @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" value="{{ old('email') }}" name="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror">
                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">Payment method</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="radio" name="payment" value="Cash" checked>
                                        <label for="">Cash</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="payment" value="Bank">
                                        <label for="">Bank Card</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" value="{{ $category_name }}" name="category_name">
                            <input type="hidden" value="{{ $room_name }}" name="room_name">
                            <input type="hidden" value="{{ $number_of_adults }}" name="number_of_adults">
                            <input type="hidden" value="{{ $number_of_children }}" name="number_of_children">
                            <input type="hidden" value="{{ $checkin }}" name="checkin">
                            <input type="hidden" value="{{ $checkout }}" name="checkout">
                            <input type="hidden" value="{{ $price }}" name="price">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Order
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
