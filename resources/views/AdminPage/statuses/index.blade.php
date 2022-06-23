@extends('layouts.hotel')

@section('content')
    <link href="{{ asset('css/client/style.css') }}" rel="stylesheet" type="text/css" media="all">
    {{-- <link href="{{ asset('css/client/jquery-ui.css') }}" rel="stylesheet"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="mt-4">List room</h1>
                {{-- <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ $number_of_adults }} adults,
                        {{ $number_of_children }} children
                    </li>
                </ol> --}}
                <div class="card">
                    <br>
                    @foreach ($results as $status)
                        <div class="card-body">
                            <div class="shell-wide">
                                <div class="range range-50 range-xs-center overflow-hidden">
                                    <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="post-video post-video-border">
                                            <div class="post-video__image">
                                                <img src="{{ $status->image }}" alt="" width="1020"
                                                    height="525" />
                                                {{-- <img src="{{ asset('images/room_categories/normal2.jpg') }}"
                                                    alt="" width="1020" height="525" /> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <div class="bg-primary section-wrap-content-var-1">
                                            <div class="section-wrap-content-var-1-inner">
                                                <div class="group">
                                                    <dl class="list-desc">
                                                        <dt>
                                                            <a
                                                                href="{{ route('showDetail', [
                                                                    // 'listImage' => $listImage,
                                                                    // 'category' => $category,
                                                                    'category_name' => $status->category_name,
                                                                    'room_name' => $status->room_name,
                                                                    'double_bed' => $status->double_bed,
                                                                    'single_bed' => $status->single_bed,
                                                                    // 'images' => $status->images,
                                                                    'price' => $status->price,
                                                                    'description' => $status->description,
                                                                    // out parameter
                                                                    'number_of_adults' => $number_of_adults,
                                                                    'number_of_children' => $number_of_children,
                                                                    'checkin' => $checkin,
                                                                    'checkout' => $checkout,
                                                                ]) }}">
                                                                <h2 style="float: left">
                                                                    {{ $status->category_name }}&emsp;&emsp;</h2>
                                                            </a>
                                                        </dt>
                                                    </dl>
                                                    {{-- <dl class="list-desc">
                                                        <dt>
                                                            <h2 style="float: left">
                                                                Room: {{ $status->room_name }}&emsp;&emsp;</h2>
                                                        </dt>
                                                    </dl> --}}
                                                    <dl class="list-desc">
                                                        <dt>Price:</dt>
                                                        <dd><span>{{ $status->price }}$/day</span></dd>
                                                    </dl>
                                                </div>
                                                <br>
                                                <p>
                                                    {{ $status->description }}
                                                </p>
                                                <div class="group">
                                                    <dl class="list-desc">
                                                        <dt>Include: </dt>
                                                        <dd><span>
                                                                @if ($status->double_bed != 0)
                                                                    {{ $status->double_bed }} double-bed,
                                                                @endif
                                                                {{ $status->single_bed }} single-bed
                                                            </span></dd>
                                                    </dl>
                                                    <dl class="list-desc">
                                                        <dt>Area:</dt>
                                                        <dd><span>{{ $status->area }}m2</span></dd>
                                                    </dl>
                                                </div>
                                                <a class="button button-effect-ujarak button-lg button-secondary-outline button-square"
                                                    href="{{ route('showDetail', [
                                                        // 'listImage' => $listImage,
                                                        // 'category' => $category,
                                                        'category_name' => $status->category_name,
                                                        'room_name' => $status->room_name,
                                                        'double_bed' => $status->double_bed,
                                                        'single_bed' => $status->single_bed,
                                                        // 'images' => $status->images,
                                                        'price' => $status->price,
                                                        'description' => $status->description,
                                                        // out parameter
                                                        'number_of_adults' => $number_of_adults,
                                                        'number_of_children' => $number_of_children,
                                                        'checkin' => $checkin,
                                                        'checkout' => $checkout,
                                                    ]) }}">
                                                    <span>book now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            {{-- <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".3s">
                                <a class="post-box-image" href="blog-post.html">
                                    <figure>
                                        <img src="{{ asset('images/layout-2-blog-03-460x369.jpg') }}" alt="" width="460"
                                            height="369" />
                                    </figure>
                                </a>
                                <div class="post-box-minimal-caption">
                                    <div class="post-box-minimal-caption-inner">
                                        <h4 class="post-box-minimal-title">
                                            <a
                                                href="{{ route('showDetail', [
                                                    'category_name' => $status->category_name,
                                                    'room_name' => $status->room_name,
                                                    'double_bed' => $status->double_bed,
                                                    'single_bed' => $status->single_bed,
                                                    // 'images' => $status->images,
                                                    'price' => $status->price,
                                                    'description' => $status->description,
                                                    // out parameter
                                                    'number_of_adults' => $number_of_adults,
                                                    'number_of_children' => $number_of_children,
                                                    'checkin' => $checkin,
                                                    'checkout' => $checkout,
                                                ]) }}">
                                                <h2 class="para">{{ $status->category_name }}</h2>
                                            </a>
                                        </h4>
                                        <h2 class="para">Price: {{ $status->price }}$/day</h2>
                                        <br>
                                        <h2 class="para">Including:
                                            @if ($status->double_bed != 0)
                                                {{ $status->double_bed }} double-bed,
                                            @endif
                                            {{ $status->single_bed }} single-bed
                                        </h2>
                                        <br>
                                        <h2 class="para">{{ $status->description }}</h2>
                                        </h5>
                                        <div class="post-box-minimal-meta-bottom">
                                            <time class="post-box-icon mdi mdi-clock" datetime="2021">August 23, 2021</time>
                                            <p>
                                                <a class="post-box-icon mdi mdi-thumb-up-outline"
                                                    href="blog-post.html">40</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                    @endforeach
                    {{-- @foreach ($results as $status)
                            <div class="grids_of_2">
                                <div class="grids_of_img">
                                    <img src="{{ asset('images/layout-2-blog-03-460x369.jpg') }}" alt="" />
                                </div>
                                <div class="grids_of_para">
                                    <a
                                        href="{{ route('showDetail', [
                                            'category_name' => $status->category_name,
                                            'room_name' => $status->room_name,
                                            'double_bed' => $status->double_bed,
                                            'single_bed' => $status->single_bed,
                                            // 'images' => $status->images,
                                            'price' => $status->price,
                                            'description' => $status->description,
                                            // out parameter
                                            'number_of_adults' => $number_of_adults,
                                            'number_of_children' => $number_of_children,
                                            'checkin' => $checkin,
                                            'checkout' => $checkout,
                                        ]) }}">
                                        <h2 class="para">{{ $status->category_name }}</h2>
                                    </a>
                                    <p class="para">{{ $status->price }}</p>
                                    <p class="para">Room: {{ $status->room_name }}</p>
                                    <p class="para">{{ $status->double_bed }} double-bed</p>
                                    <p class="para">{{ $status->single_bed }} single-bed</p>
                                    <p class="para">{{ $status->description }}</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        @endforeach --}}
                    {{-- <table class="table">
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
                                        <div class="grids_of_2">
                                            <div class="grids_of_img">
                                                <img src="{{ asset('images/layout-2-blog-03-460x369.jpg') }}" alt="" />
                                            </div>
                                            <div class="grids_of_para">
                                                <a
                                                    href="{{ route('showDetail', [
                                                        'category_name' => $status->category_name,
                                                        'room_name' => $status->room_name,
                                                        'double_bed' => $status->double_bed,
                                                        'single_bed' => $status->single_bed,
                                                        // 'images' => $status->images,
                                                        'price' => $status->price,
                                                        'description' => $status->description,
                                                        // out parameter
                                                        'number_of_adults' => $number_of_adults,
                                                        'number_of_children' => $number_of_children,
                                                        'checkin' => $checkin,
                                                        'checkout' => $checkout,
                                                    ]) }}">
                                                    <p class="para">{{ $status->category_name }}</p>
                                                </a>
                                                <p class="para">{{ $status->room_name }}</p>
                                                <p class="para">{{ $status->double_bed }}</p>
                                                <p class="para">{{ $status->single_bed }}</p>
                                                <p class="para">{{ $status->description }}</p>
                                                <p class="para">{{ $status->price }}</p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <th scope="row">{{ $status->index }}</th>
                                        <th>{{ $status->category_name }}</th>
                                        <td>{{ $status->room_name }}</td>
                                        <td>{{ $status->double_bed }}</td>
                                        <td>{{ $status->single_bed }}</td>
                                        <td>{{ $status->description }}</td>
                                        <td>{{ $status->price }}</td>
                                        <td><a href="{{ route('showDetail', ['status' => $status->array_status]) }}"><button>
                                        <td><a
                                                href="{{ route('showDetail', [
                                                    'category_name' => $status->category_name,
                                                    'room_name' => $status->room_name,
                                                    'double_bed' => $status->double_bed,
                                                    'single_bed' => $status->single_bed,
                                                    // 'images' => $status->images,
                                                    'price' => $status->price,
                                                    'description' => $status->description,
                                                    // out parameter
                                                    'number_of_adults' => $number_of_adults,
                                                    'number_of_children' => $number_of_children,
                                                    'checkin' => $checkin,
                                                    'checkout' => $checkout,
                                                ]) }}"><button
                                                    type="button" class="btn btn-success">DETAIL</button></a></td>
                                        <td><a href="{{ route('chart', $status->room_name) }}"><button type="button"
                                                    class="btn btn-primary">STATUS</button></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
