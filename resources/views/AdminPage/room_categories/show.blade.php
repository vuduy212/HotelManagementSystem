@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$roomCategories->id}}</th>
                                <td>{{$roomCategories->category_name}}</td>
                                <td>{{$roomCategories->description}}</td>
                                <td>{{$roomCategories->image}}</td>
                                <td>{{$roomCategories->price}}</td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
