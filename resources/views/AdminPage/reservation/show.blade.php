@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ID: {{ $id }}</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Reservation Code</label>
                            <div class="col-md-6">
                                <p>{{ $code }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Client name</label>
                            <div class="col-md-6">
                                <p>{{ $client_name }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <div class="col-md-6">
                                <p>{{ $phone }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <p>{{ $email }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ID_Card</label>
                            <div class="col-md-6">
                                <p>{{ $ID_Card }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category name</label>
                            <div class="col-md-6">
                                <p>{{ $category_name }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Room's name</label>
                            <div class="col-md-6">
                                <p>{{ $room_name }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Number of adults</label>
                            <div class="col-md-6">
                                <p>{{ $number_of_adults }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Number of children</label>
                            <div class="col-md-6">
                                <p>{{ $number_of_children }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Check-in time</label>
                            <div class="col-md-6">
                                <p>{{ $checkin }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Check-out time</label>
                            <div class="col-md-6">
                                <p>{{ $checkout }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Time</label>
                            <div class="col-md-6">
                                <p>{{ $time }} day</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <p>{{ $price }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Payment</label>
                            <div class="col-md-6">
                                <p>{{ $payment }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Create time</label>
                            <div class="col-md-6">
                                <p>{{ $created_at }}</p>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
