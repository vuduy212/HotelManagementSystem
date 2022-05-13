@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <img src="{{ $roomCategories->getImage() }}" alt="{{ $roomCategories->name }}"
                        class="imaged">
                </div>
                <div class="details col-md-3">
                    <h3 class="">Category: {{ $roomCategories->category_name }}</h3>
                    <div class="rating">
                        <div class="stars"> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star"></span> <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <br>
                    <h4>Description</h2>
                        <p class="product-description">{{ $roomCategories->description }}</p>
                        <br>
                        <h4 class="price">Price for 1 day: {{ $roomCategories->price }}$</h4>
                        <a href="{{ route('categories.select', $roomCategories->id) }}"><button type="button"
                                class="btn btn-danger">Order</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
