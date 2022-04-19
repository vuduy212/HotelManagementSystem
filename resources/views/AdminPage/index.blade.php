@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-4">Paradise Hotel Management</h1>
        <ol class="breadcrumb mb-4">
            {{-- <li class="breadcrumb-item active">Welcome {{ Auth::user()->name }} to Paradise Hotel management !!</li> --}}
            <li class="breadcrumb-item active">Welcome to Paradise Hotel management !!</li>
        </ol>

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
                                        <td>{{ implode(', ',Auth::user()->roles()->get()->pluck('name')->toArray()) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <h4 style="color:blue">Introduction</h4>
                    <h5 class="mt-4">
                        Boutique Hotel Budapest is a lovely hotel, in the heart of Budapest, within the triangle formed by
                        the bustling pedestrian shopping street Vaci utca, the fascinating Central Market Hall, and the
                        Liberty Bridge. In addition to excellent transport links at the meeting point of the main metro line
                        and tram line, our hotel is surrounded by the city centre’s elegant shops, cafés, restaurants, bars,
                        the famous Gellert Thermal Spa, Szabadsag hid and other tourist sights just a few steps from the
                        left bank of the Danube. Recently, our whole hotel has undergone a complete renovation.
                    </h5>
                    {{-- <h5 class="mt-4">
                        HY Hotel is located near Nguyen Van Linh Square - a beautiful space in the center of Hung Yen city,
                        where traffic is convenient. Located between the economic and cultural center of Hung Yen, HY Peace
                        Hotel wishes to be the first door in Hung Yen to welcome domestic and international guests to Hung
                        Yen, a land possessing 2 types of tourism. characterized by ecotourism and spiritual cultural
                        tourism.
                    </h5>
                    <h5>
                        With 4-star international standard quality, HY Peace Hotel not only perfectly meets your resting
                        needs, but also brings great moments of relaxation and entertainment and leaves an impressive
                        aftertaste in the culture. cuisine here. The hotel is a harmonious combination of luxurious, modern
                        and ancient style, including the restaurant complex, swimming pool, tennis court and other
                        entertainment areas gathered in one campus. nearly 15,000 m2 large.
                    </h5> --}}
                </div>
            </div>
        </div>

    </div>
@endsection
