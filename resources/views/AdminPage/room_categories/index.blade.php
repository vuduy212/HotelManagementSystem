@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">Room Categories</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Room Categories !!</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        @room_manager
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Room Categories</a>
                        @endif
                    </div>
                    <form action="{{ route('categories.index') }}" method="GET" class="md-3 d-flex">
                        <select name="sort_by_price">
                            <option value="">Sort by price</option>
                            <option name="price" value="ascending">Ascending</option>
                            <option name="price" value="descending">Descending</option>
                        </select>

                        <input type="text" class="form-control" name="key" value="{{ request('key') }}"
                            placeholder="Enter Room Category">
                        <input type="text" class="form-control" placeholder="Enter number per page" name="number"
                            value="{{ request('number') }}">

                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Services</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomCategories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ implode(', ',$category->services()->get()->pluck('service_name')->toArray()) }}
                                        </td>
                                        <td>{{ $category->price }} $</td>
                                        <td>
                                            <a href="{{ route('categories.show', $category->id) }}"><button type="button"
                                                    class="btn btn-success">DETAIL</button></a>
                                            @room_manager
                                            <a href="{{ route('categories.edit', $category->id) }}"><button
                                                    type="button" class="btn btn-warning">EDIT</button>
                                                <form action="{{ route('categories.destroy', $category) }}"
                                                    method="POST" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>
                                @endif
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $roomCategories->appends(request()->only('key', 'number', 'sort_by_price'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
