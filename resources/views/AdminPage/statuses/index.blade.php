@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">Room's Status Management</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to Room's Status Management !!</li>
                </ol>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Room Category</th>
                                    <th scope="col">Room's Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomStatus as $status)
                                    <tr>
                                        <th scope="row">{{ $status->category_name }}</th>
                                        <td>
                                            {{ $status->room_name }}
                                        </td>
                                        <td>{{ $status->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
