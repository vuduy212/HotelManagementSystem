@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">Rooms Management</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Rooms Management !!</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        @room_manager
                        <a href="{{ route('rooms.create') }}" class="btn btn-primary">Create New Rooms</a>
                        @endif
                    </div>
                    <form action="{{ route('rooms.index') }}" method="GET" class="md-3 d-flex">
                        <select name="filter_category">
                            <option value="">Filter by Category</option>
                            @foreach ($roomCategories as $category)
                                <option value="{{ $category->name }}"
                                    {{ request('filter_category') == $category->name ? 'selected' : '' }}>
                                    {{ $category->category_name }}</option>
                            @endforeach
                        </select>

                        <input type="text" class="form-control" placeholder="Enter room's name..." name="key"
                            value="{{ request('key') }}">
                        <input type="text" class="form-control" placeholder="Enter number per page" name="number"
                            value="{{ request('number') }}">

                        <button type="submit" class="btn btn-success">Search</button>
                    </form>


                    {{-- <form action="{{ route('rooms.index') }}" method="GET" class="md-3 d-flex">
                    <input type="text" class="form-control" name="key" value="{{request('key')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    @room_manager
                                    <th scope="col">Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <th scope="row">{{ $room->id }}</th>
                                        <td>
                                            @foreach ($roomCategories as $category)
                                                @if ($room->category_name == $category->category_name)
                                                    {{ $category->category_name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $room->room_name }}</td>
                                        <td>{{ $room->description }}</td>
                                        @room_manager
                                        <td>
                                            <a href="{{ route('chart', $room->room_name) }}"><button type="button"
                                                    class="btn btn-primary">STATUS</button></a>
                                            <a href="{{ route('rooms.show', $room->id) }}"><button type="button"
                                                    class="btn btn-success">DETAIL</button></a>
                                            <a href="{{ route('rooms.edit', $room->id) }}"><button type="button"
                                                    class="btn btn-warning">EDIT</button></a>
                                            <form action="{{ route('rooms.destroy', $room) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $rooms->appends(request()->only('key', 'number', 'filter_category'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
