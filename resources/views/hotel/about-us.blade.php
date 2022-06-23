@extends('layouts.hotel')
@section('content')
    <!-- Breadcrumbs & Page title-->
    <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
            <div class="range range-xs-center">
                <div class="cell-xs-12 cell-xl-11">
                    <h2 class="text-white">About Us</h2>
                    <ul class="breadcrumbs-custom">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
            <div class="range range-50 range-md-justify range-sm-middle">
                <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="box-outline box-outline__mod-1">
                        <figure><img src="{{ asset('images/about-01-546x516.jpg') }}" alt="" width="546"
                                height="516" />
                        </figure>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">
                    <h3>A Few Words About Us</h3>
                    <p>Tired of your daily routine? Seeking for a place to stay and rest with your family? You are in the
                        right place! Our spa resort and hotel provides luxury and historic accommodations for travelers. It
                        combines modern style and amenities with traditional values.</p>
                    <p>All rooms are equipped with air conditioners and LCD TVs. Free WI-FI service is available throughout
                        the territory of the hotel. Our restaurant food and meals from world cuisines unite people
                        connecting history and traditions. Experience our warm hospitality, high quality of service and
                        exceptional comfort! Make a reservation for your dream vacation today!</p><a
                        class="button button-primary button button-square button-effect-ujarak button-lg"
                        href="#"><span>read more</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-md">
        <div class="shell">
            <h3>Rooms & Suites</h3>
            <p>Royal Villas offers the finest accommodations with unique designs that provide both a luxurious and relaxing
                environment. Specially <br> selected fabrics and finishes vary from room to room, offering guests a variety
                of beautiful and unique atmospheres to select from.</p>
            <div class="range range-30" data-lightgallery="group">
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-1-1200x800_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-1-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Single Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-2-1200x800_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-2-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Double Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-3-1058x800_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-3-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Twin Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-4-1200x797_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-4-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Family Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-5-1200x800_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-5-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Executive Suite</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic"
                        href="images/grid-gallery-6-1200x800_original.jpg" data-lightgallery="item">
                        <figure><img src="{{ asset('images/grid-gallery-6-370x276.jpg') }}" alt="" width="370"
                                height="276" />
                        </figure>
                        <div class="caption">
                            <p class="caption-title">VIP Suite</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-md bg-secondary-3 text-center">
        <div class="shell">
            <h2>What People Say</h2>
            <div class="range range-50">
                <div class="cell-xs-12">
                    <div class="box-outline box-outline-fullwidth box-outline__mod-1">
                        <div class="quote-carousel-wrap">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true"
                                data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel"
                                data-for="#child-carousel">
                                <div class="item">
                                    <div class="quote-center">
                                        <div class="quote-center-title">
                                            <h4>Perfect spa resort & services!</h4>
                                        </div>
                                        <p class="quote-center-body">
                                            <q>The minute you walk out of the airport you are greeted with a warm welcome
                                                from Royal Villas staff member, and it doesn't stop. The staff truly seems
                                                to love their job and want to make sure your visit and stay is everything
                                                you expect.</q>
                                        </p>
                                        <div class="quote-center-cite">
                                            <cite>Jane Neddery</cite><span>Office manager</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="quote-center">
                                        <div class="quote-center-title">
                                            <h4>Great atmosphere and level of customer service</h4>
                                        </div>
                                        <p class="quote-center-body">
                                            <q>Got a Royal Villas certificate as a gift a few months ago, and I really had a
                                                fantastic spa experience there. I arrived early & was greeted warmly at the
                                                door. Surprisingly, I didn't have to wait. Everything was perfect. Highly
                                                recommend this amazing place to everybody!</q>
                                        </p>
                                        <div class="quote-center-cite">
                                            <cite>Sam Brown</cite><span>Journalist</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="quote-center">
                                        <div class="quote-center-title">
                                            <h4>Wonderful and friendly environment</h4>
                                        </div>
                                        <p class="quote-center-body">
                                            <q>No better way to rediscover the joy in everyday living than at Royal Villas.
                                                Second time to visit and experience was just as powerful as the first. They
                                                exceeded all my expectation one again. This is the place to visit if you are
                                                looking for a high-quality spa!</q>
                                        </p>
                                        <div class="quote-center-cite">
                                            <cite>Julie Adams</cite><span>Babysitter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent"
                                data-arrows="false" data-loop="true" data-dots="false" data-swipe="true"
                                data-center-mode="true" data-sm-center-mode="true" data-md-center-mode="true"
                                data-lg-center-mode="true" data-center-padding="0.50" data-items="1" data-xs-items="1"
                                data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1">
                                <div class="item">
                                    <figure><img class="img-circle" src="{{ asset('images/about-02-100x100.jpg') }}"
                                            alt="" width="100" height="100" />
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure><img class="img-circle" src="{{ asset('images/about-04-100x100.jpg') }}"
                                            alt="" width="100" height="100" />
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure><img class="img-circle" src="{{ asset('images/about-05-100x100.jpg') }}"
                                            alt="" width="100" height="100" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-md bg-white">
        <div class="shell">
            <h2>Our Team</h2>
            <div class="range range-xs-center range-75">
                <!--team member 1-->
                <div class="cell-sm-6 cell-md-4 wow fadeInUp" data-wow-delay=".1s">
                    <div class="team-box box-outline">
                        <div class="team-image-box"><img src="{{ asset('images/team-01-295x282.jpg') }}"
                                alt="" width="295" height="282" />
                            <div class="team-image-caption">
                                <ul class="list-inline">
                                    <li><a class="icon-sm icon-white fa-instagram icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-facebook icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-twitter icon" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption"><a class="link team-title" href="#">Theresa
                                Smith</a><span>Manager</span></div>
                    </div>
                </div>
                <!--team member 2-->
                <div class="cell-sm-6 cell-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-box box-outline">
                        <div class="team-image-box"><img src="{{ asset('images/team-02-295x282.jpg') }}"
                                alt="" width="295" height="282" />
                            <div class="team-image-caption">
                                <ul class="list-inline">
                                    <li><a class="icon-sm icon-white fa-instagram icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-facebook icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-twitter icon" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption"><a class="link team-title" href="#">Albert
                                Mills</a><span>Receptionist</span></div>
                    </div>
                </div>
                <!--team member 3-->
                <div class="cell-sm-6 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-box box-outline">
                        <div class="team-image-box"><img src="{{ asset('images/team-03-295x282.jpg') }}"
                                alt="" width="295" height="282" />
                            <div class="team-image-caption">
                                <ul class="list-inline">
                                    <li><a class="icon-sm icon-white fa-instagram icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-facebook icon" href="#"></a></li>
                                    <li><a class="icon-sm icon-white fa-twitter icon" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption"><a class="link team-title" href="#">Sandra
                                Adams</a><span>Receptionist</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
