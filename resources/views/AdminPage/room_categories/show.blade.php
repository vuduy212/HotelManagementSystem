@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Room Categories {{$roomCategories->id}}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Images</th>
                            <th scope="col">Price</th>
                            @client
                            <th scope="col">Action</th>
                            @endif
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$roomCategories->id}}</th>
                                <td>{{$roomCategories->category_name}}</td>
                                <td>{{$roomCategories->description}}</td>
                                <td><img src="{{ $roomCategories->getImage() }}" alt="{{ $roomCategories->name }}" class="image-show"></td>
                                <td>{{$roomCategories->price}}</td>
                                <td>
                                <a href="{{route('categories.select', $roomCategories->id)}}"><button type="button" class="btn btn-danger">Order</button></a>
                                </td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
