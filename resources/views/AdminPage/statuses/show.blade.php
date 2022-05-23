@extends('layouts.hotel')

@section('content')
    <div class="container">
        <br>
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <img src="{{ $images }}" alt="{{ $category_name }}" class="imaged">
                </div>
                <div class="details col-md-3">
                    <h3 class="">Room Category: {{ $category_name }}</h3>
                    <div class="rating">
                        <div class="stars"> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star"></span> <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <br>
                    <h4>Room's name</h4>
                    <p class="product-description">{{ $room_name }}</p>
                    <h4>Number of double bed</h4>
                    <p class="product-description">{{ $double_bed }}</p>
                    <br>
                    <h4>Number of single bed</h4>
                    <p class="product-description">{{ $single_bed }}</p>
                    <br>
                    <h4>Description</h4>
                    <p class="product-description">{{ $description }}</p>
                    <br>
                    <h4 class="price">Price for 1 day: {{ $price }}$</h4>
                    <a
                        href="{{ route('order', [
                            'category_name' => $category_name,
                            'room_name' => $room_name,
                            'price' => $price,
                            // out parameter
                            'number_of_adults' => $number_of_adults,
                            'number_of_children' => $number_of_children,
                            'checkin' => $checkin,
                            'checkout' => $checkout,
                        ]) }}"><button
                            type="button" class="btn btn-danger">Order</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
