@extends('layouts.hotel')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ID: {{ $details['id'] }}</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Client name</label>
                            <div class="col-md-6">
                                <p>{{ $details['client_name'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <div class="col-md-6">
                                <p>{{ $details['phone'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <p>{{ $details['email'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">CMND</label>
                            <div class="col-md-6">
                                <p>{{ $details['cmnd'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category name</label>
                            <div class="col-md-6">
                                <p>{{ $details['category_name'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Room's name</label>
                            <div class="col-md-6">
                                <p>{{ $details['room_name'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Number of adults</label>
                            <div class="col-md-6">
                                <p>{{ $details['number_of_adults'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Number of children</label>
                            <div class="col-md-6">
                                <p>{{ $details['number_of_children'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Check-in time</label>
                            <div class="col-md-6">
                                <p>{{ $details['checkin'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Check-out time</label>
                            <div class="col-md-6">
                                <p>{{ $details['checkout'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Time</label>
                            <div class="col-md-6">
                                <p>{{ $details['time'] }} day</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <p>{{ $details['price'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Payment</label>
                            <div class="col-md-6">
                                <p>{{ $details['payment'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Create time</label>
                            <div class="col-md-6">
                                <p>{{ $details['created_at'] }}</p>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
