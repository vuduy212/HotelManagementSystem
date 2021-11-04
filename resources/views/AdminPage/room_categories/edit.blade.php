@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Room Category {{$roomCategories->id}}</div>

                <div class="card-body">
                    <form action="{{ route('categories.update', $roomCategories) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                            <div class="col-md-6">
                                <input id="category_name" type="text" class="form-control" name="category_name" value="{{ $roomCategories->category_name }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ $roomCategories->description }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Images</label>
                            <div class="col-md-6">
                                <input id="images" type="text" class="form-control" name="images" value="{{ $roomCategories->images }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ $roomCategories->price }}" autofocus>
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
