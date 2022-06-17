@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">Room Orders Management</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Room Orders Management !!</li>
                </ol>
                <div class="card">
                    <form action="{{ route('listAllReservation') }}" method="GET" class="md-3 d-flex">

                        <input type="text" class="form-control" placeholder="Enter phone number..." name="phone"
                            value="{{ request('phone') }}">
                        <input type="date" class="form-control" placeholder="Enter checkin..." name="checkin"
                            value="{{ request('checkin') }}">
                        <input type="date" class="form-control" placeholder="Enter checkout..." name="checkout"
                            value="{{ request('checkout') }}">
                        <input type="text" class="form-control" placeholder="Enter number per page" name="number"
                            value="{{ request('number') }}">

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <div class="card-body">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
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
                                        <td>{{ $reservation->client_name }}</td>
                                        <td>{{ $reservation->checkin1 }}</td>
                                        <td>{{ $reservation->checkout1 }}</td>
                                        <td>{{ $reservation->phone }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->payment }}</td>
                                        <td>{{ $reservation->created_at }}</td>
                                        <td>
                                            <a href="{{ route('viewDetail', $reservation->id) }}"><button type="button"
                                                    class="btn btn-success">DETAIL</button></a>
                                            {{-- <a href="{{ route('result.edit', $reservation->id) }}"><button type="button"
                                                    class="btn btn-warning">EDIT</button></a>
                                            <form action="{{ route('result.destroy', $reservation) }}" method="POST"
                                                class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $result->appends(request()->only('phone', 'number', 'checkin', 'checkout'))->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
