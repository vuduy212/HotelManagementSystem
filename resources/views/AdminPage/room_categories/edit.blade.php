@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Room Category {{ $roomCategories->id }}</div>

                    <div class="card-body">
                        <form action="{{ route('categories.update', $roomCategories) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                                <div class="col-md-6">
                                    <input id="category_name" name="category_name"
                                        value="{{ $roomCategories->category_name }}" type="text"
                                        class="form-control @error('category_name') is-invalid @enderror">
                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <input id="description" name="description" value="{{ $roomCategories->description }}"
                                        type="text" class="form-control @error('description') is-invalid @enderror">
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="roles" class="col-md-4 col-form-label text-md-right">Services</label>
                                <div class="col-md-6">
                                    @foreach ($services as $service)
                                        <div class="form-check">
                                            <input type="checkbox" name="services[]" value="{{ $service->id }}"
                                                @if ($roomCategories->services->pluck('id')->contains($service->id)) checked @endif>
                                            <label for="">{{ $service->service_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>
                                <div class="col-md-6">
                                    <input id="price" name="price" value="{{ $roomCategories->price }}"
                                        type="text" class="form-control @error('price') is-invalid @enderror">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
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
