@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">Reservations Management</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Reservations Management !!</li>
                </ol>
                <div class="card">
                    {{-- <div class="card-header">
                        <a href="{{ route('createReservation') }}" class="btn btn-primary">Create New Reservation</a>
                    </div> --}}
                    <form action="{{ route('listAllReservation') }}" method="GET" class="md-3 d-flex">
                        <select name="filter_status">
                            <option value="">Status</option>
                            <option name="status" value="Unconfirm"
                                {{ request('filter_status') == 'Unconfirm' ? 'selected' : '' }}>Unconfirm</option>
                            <option name="status" value="Confirmed"
                                {{ request('filter_status') == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option name="status" value="Using"
                                {{ request('filter_status') == 'Using' ? 'selected' : '' }}>Using</option>
                            <option name="status" value="Paid"
                                {{ request('filter_status') == 'Paid' ? 'selected' : '' }}>Paid</option>
                            <option name="status" value="Cancelled"
                                {{ request('filter_status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        <select name="room_categories">
                            <option value="">Room Category</option>
                            @foreach ($roomCategories as $category)
                                <option value="{{ $category->category_name }}"
                                    {{ request('room_categories') == $category->category_name ? 'selected' : '' }}>
                                    {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <select name="rooms">
                            <option value="">Room</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->room_name }}"
                                    {{ request('rooms') == $room->room_name ? 'selected' : '' }}>
                                    {{ $room->room_name }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control" placeholder="Enter phone number..." name="phone"
                            value="{{ request('phone') }}">
                        <input type="date" class="form-control" placeholder="Enter checkin..." name="checkin"
                            value="{{ request('checkin') }}">
                        <input type="date" class="form-control" placeholder="Enter checkout..." name="checkout"
                            value="{{ request('checkout') }}">
                        <input type="text" class="form-control" placeholder="Enter number per page" name="number"
                            value="{{ request('number') }}">

                        <button type="submit" class="btn btn-success">Search</button>
                    </form>
                    <div class="card-body">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Client name</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Payment</th>
                                    <th scope="col">Time order</th>
                                    {{-- @receptionist --}}
                                    <th scope="col">Actions</th>
                                    {{-- @endif --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $reservation)
                                    <tr>
                                        <th scope="row">{{ $reservation->id }}</th>
                                        <td>{{ $reservation->category_name }}</td>
                                        <td>{{ $reservation->room_name }}</td>
                                        <td>{{ $reservation->status }}</td>
                                        <td>{{ $reservation->client_name }}</td>
                                        <td>{{ $reservation->checkin1 }}</td>
                                        <td>{{ $reservation->checkout1 }}</td>
                                        <td>{{ $reservation->phone }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->payment }}</td>
                                        <td>{{ $reservation->created_at }}</td>
                                        <td>
                                            <a href="{{ route('showReservation', $reservation->id) }}"><button
                                                    type="button" class="btn btn-success">DETAIL</button></a>
                                            <a href="{{ route('editReservation', $reservation->id) }}"><button
                                                    type="button" class="btn btn-warning">EDIT</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p>Total: {{ $count }} reservations</p>
                        {{ $result->appends(request()->only('phone', 'number', 'checkin', 'checkout', 'room_categories', 'rooms', 'status'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
