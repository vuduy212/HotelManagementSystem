@extends('layouts.client')

@section('content')
    <!----start-images-slider---->
    <div class="images-slider">
        <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <!-- Slide image -->
                    <img src="{{ asset('images/client/slider-bg.jpg') }}" alt="" />
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h4 class="title"><i class="bg"></i>Paradise <span
                                    class="hide">Hotel</span></h4>
                            <h5 class="title1"><i class="bg"></i>Cau Giay, <span class="hide">Ha
                                    Noi</span></h5>
                            <!-- /Text title -->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class="slide">
                    <img src="{{ asset('images/client/slider-bg.jpg') }}" alt="" />
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h4 class="title"><i class="bg"></i>Paradise <span
                                    class="hide">Hotel </span>text</h4>
                            <h5 class="title1"><i class="bg"></i>Paper Bridge, <span
                                    class="hide">Ha Noi</span> </h5>
                            <!-- /Text title -->
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class="timers"> </div>
            <div class="slidePrev"><span> </span></div>
            <div class="slideNext"><span> </span></div>
        </div>
        <!--/slider -->
    </div>
    <!--start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="online_reservation">
                <div class="b_room">
                    <div class="booking_room">
                        <h4>book a room online</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="reservation">
                        <form method="GET" action="{{ route('client.selectRoom') }}">
                            @csrf
                            <ul>
                                <li class="span1_of_1">
                                    <h5>Type of room:</h5>
                                    <!----------start section_room----------->
                                    <div class="section_room">
                                        <select id="country" onchange="change_country(this.value)"
                                            class="frm-field required" name="room_category">
                                            <option value="null">Select a type of room</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </li>
                                <li class="span1_of_1 left">
                                    <h5>check-in-date:</h5>
                                    <div class="book_date">
                                        <input name="checkin" class="date" id="datepicker" type="text"
                                            value="DD/MM/YY" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">

                                    </div>
                                </li>
                                <li class="span1_of_1 left">
                                    <h5>check-out-date:</h5>
                                    <div class="book_date">
                                        <input name="checkout" class="date" id="datepicker1" type="text"
                                            value="DD/MM/YY" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                    </div>
                                </li>
                                {{-- <li class="span1_of_2 left">
                                <h5>Adults:</h5>
                                <!----------start section_room----------->
                                <div class="section_room">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">1</option>
                                        <option value="null">2</option>
                                        <option value="AX">3</option>
                                        <option value="AX">4</option>
                                    </select>
                                </div>
                            </li> --}}
                                <li class="span1_of_3">
                                    <div class="date_btn">
                                        <input type="submit" value="book now" />
                                    </div>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!--start grids_of_3 -->
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <div class="grid1_of_3_img">
                        <a href="{{ route('client.details') }}">
                            <img src="{{ asset('images/client/pic2.jpg') }}" alt="" />
                            <span class="next"> </span>
                        </a>
                    </div>
                    <h4><a href="#">single room<span>120$</span></a></h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="grid1_of_3">
                    <div class="grid1_of_3_img">
                        <a href="{{ route('client.details') }}">
                            <img src="{{ asset('images/client/pic1.jpg') }}" alt="" />
                            <span class="next"> </span>
                        </a>
                    </div>
                    <h4><a href="#">double room<span>180$</span></a></h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="grid1_of_3">
                    <div class="grid1_of_3_img">
                        <a href="{{ route('client.details') }}">
                            <img src="{{ asset('images/client/pic3.jpg') }}" alt="" />
                            <span class="next"> </span>
                        </a>
                    </div>
                    <h4><a href="#">suite room<span>210$</span></a></h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--start main -->
@endsection
