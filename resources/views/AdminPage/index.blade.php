@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Hotel management</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Welcome {{ Auth::user()->name }} to Hotel management !!</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">User Management</div>
                {{-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Room Management</div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Room Status Management</div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Room Order Management</div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts.slide')
                <br>
                <div class="card">
                    <div class="card-header">Informations of {{ Auth::user()->name }}</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td>{{ implode(', ', Auth::user()->roles()->get()->pluck('name')->toArray()) }}</td>
                                  </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
