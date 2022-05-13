@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1 class="mt-4">List room</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ $number_of_adults }} adults,
                        {{ $number_of_children }} children</li>
                </ol>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Room Category</th>
                                    <th scope="col">Room's name</th>
                                    <th scope="col">Double bed</th>
                                    <th scope="col">Single bed</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $status)
                                    <tr>
                                        <th scope="row">{{ $status->index }}</th>
                                        <th>{{ $status->category_name }}</th>
                                        <td>{{ $status->room_name }}</td>
                                        <td>{{ $status->double_bed }}</td>
                                        <td>{{ $status->single_bed }}</td>
                                        <td>{{ $status->description }}</td>
                                        <td>{{ $status->price }}</td>
                                        {{-- <td>{{ dd($status->array_status) }}</td> --}}
                                        {{-- <td><a href="{{ route('showDetail', ['status' => $status->array_status]) }}"><button --}}
                                        {{ $array_status = serialize($status->array_status) }}
                                        <td><a href="{{ route('showDetail', $array_status) }}"><button type="button"
                                                    class="btn btn-success">DETAIL</button></a></td>
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
