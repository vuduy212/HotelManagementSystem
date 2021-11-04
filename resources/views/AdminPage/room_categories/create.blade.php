@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Room Category') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                            <div class="col-md-6">
                                <input id="category_name" name="category_name" type="text" class="form-control {{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <input id="description" name="description" type="text" class="form-control {{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="col-md-6">
                                <input id="images" name="images" type="text" class="form-control {{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input id="price" name="price" type="text" class="form-control {{-- @error('time') is-invalid @enderror --}}" >
                                {{-- @error('time') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
