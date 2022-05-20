@extends('layouts.hotel')
@section('content')
    <section class="section">
        <div class="shell-wide">
            <div class="range range-30 range-xs-center">
                <div class="cell-lg-8 cell-xl-9">
                    <!-- Classic slider-->
                    <section class="section">
                        <!-- Swiper -->
                        <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500"
                            data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-slide-bg="{{ asset('images/slide-01.jpg') }}">
                                    <div class="swiper-slide-caption">
                                        <div class="shell text-sm-left">
                                            <h1 data-caption-animate="slideInDown" data-caption-delay="100">
                                                Your Ideal Retreat
                                            </h1>
                                            <div class="slider-subtitle-group">
                                                <div class="decoration-line" data-caption-animate="slideInDown"
                                                    data-caption-delay="400"></div>
                                                <h4 data-caption-animate="slideInLeft" data-caption-delay="700">
                                                    Enjoy the world of relaxation
                                                </h4>
                                                <h3 data-caption-animate="slideInLeft" data-caption-delay="800">
                                                    and tranquility!
                                                </h3>
                                            </div>
                                            <a class="button button-effect-ujarak button-lg button-white-outline button-square"
                                                href="about-us.html" data-caption-animate="slideInLeft"
                                                data-caption-delay="1150"><span>learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-slide-bg="{{ asset('images/slide-02.jpg') }}">
                                    <div class="swiper-slide-caption">
                                        <div class="shell text-sm-left">
                                            <h1 data-caption-animate="slideInDown" data-caption-delay="100">
                                                Relax & Unwind
                                            </h1>
                                            <div class="slider-subtitle-group">
                                                <div class="decoration-line" data-caption-animate="slideInDown"
                                                    data-caption-delay="400"></div>
                                                <h4 data-caption-animate="slideInLeft" data-caption-delay="700">
                                                    Experience the luxurious level
                                                </h4>
                                                <h3 data-caption-animate="slideInLeft" data-caption-delay="800">
                                                    of our spa treatments
                                                </h3>
                                            </div>
                                            <a class="button button-effect-ujarak button-lg button-white-outline button-square"
                                                href="about-us.html" data-caption-animate="slideInLeft"
                                                data-caption-delay="1150"><span>learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-slide-bg="{{ asset('images/slide-03.jpg') }}">
                                    <div class="swiper-slide-caption">
                                        <div class="shell text-sm-left">
                                            <h1 data-caption-animate="slideInDown" data-caption-delay="100">
                                                Revitalize & Relax
                                            </h1>
                                            <div class="slider-subtitle-group">
                                                <div class="decoration-line" data-caption-animate="slideInDown"
                                                    data-caption-delay="400"></div>
                                                <h4 data-caption-animate="slideInLeft" data-caption-delay="700">
                                                    Indulge in our top-notch
                                                </h4>
                                                <h3 data-caption-animate="slideInLeft" data-caption-delay="800">
                                                    spa resort
                                                </h3>
                                            </div>
                                            <a class="button button-effect-ujarak button-lg button-white-outline button-square"
                                                href="about-us.html" data-caption-animate="slideInLeft"
                                                data-caption-delay="1150"><span>learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>
                </div>
                <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
                    <div class="hotel-booking-form">
                        <h3>Book a Room</h3>
                        <!-- RD Mailform-->
                        <form method="GET" action="{{ route('search') }}">
                            <div class="range range-sm-bottom spacing-20">
                                {{-- <div class="cell-lg-12 cell-md-4">
                                    <p class="text-uppercase">Your Name</p>
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="name"
                                            data-constraints="@Required" />
                                        <label class="form-label" for="contact-first-name">Your Full Name</label>
                                    </div>
                                </div> --}}
                                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                    <p class="text-uppercase">Date check-in</p>
                                    <div class="form-wrap">
                                        <label class="form-label form-label-icon" for="date-in"><span
                                                class="icon icon-primary fa-calendar"></span><span>Check-in
                                                Date</span></label>
                                        <input class="form-input" id="date-in" data-time-picker="date" type="text"
                                            name="checkin" />
                                        {{-- <input class="form-input" id="date-in" data-time-picker="date" type="text"
                                            name="checkin" /> --}}
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Time check-in</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                            data-placeholder="1" name="checkin_time">
                                            <option value="09:00:00">9h AM</option>
                                            <option value="21:00:00">9h PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Time check-out</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                            data-placeholder="1" name="checkout_time">
                                            <option value="09:00:00">9h AM</option>
                                            <option value="21:00:00">9h PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                    <p class="text-uppercase">Date Check-out</p>
                                    <div class="form-wrap">
                                        <label class="form-label form-label-icon" for="date-out"><span
                                                class="icon icon-primary fa-calendar"></span><span>Check-out
                                                Date</span></label>
                                        <input class="form-input" id="date-out" data-time-picker="date" type="text"
                                            name="checkin" />
                                        {{-- <input class="form-input" id="date-out" data-time-picker="date" type="text"
                                            name="checkout" /> --}}
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Adults</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                            data-placeholder="1" name="number_of_adults">
                                            <option>&nbsp;</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p class="text-uppercase">Children</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <!--Select 2-->
                                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                            data-placeholder="0" name="number_of_children">
                                            <option>&nbsp;</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4">
                                    <input class="button button-primary button-square button-block button-effect-ujarak"
                                        type="submit" value="Check available" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us-->
    <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
            <div class="range range-50 range-xs-center overflow-hidden">
                <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
                    <div class="post-video post-video-border">
                        <div class="post-video__image">
                            <img src="images/video-bg-1020x525.jpg" alt="" width="1020" height="525" />
                        </div>
                        <div class="post-video__body">
                            <a class="link-control post-video__control" data-lightgallery="item"
                                href="https://www.youtube.com/watch?v=I5FlP07kdvM"></a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-primary section-wrap-content-var-1">
                        <div class="section-wrap-content-var-1-inner">
                            <h2>About Us</h2>
                            <p>
                                Committed to everyone seeking energy and excitement,
                                we offer endless possibilities to unwind and
                                reenergize.
                            </p>
                            <div class="group">
                                <dl class="list-desc">
                                    <dt>Weekdays:</dt>
                                    <dd><span>8:00–20:00</span></dd>
                                </dl>
                                <dl class="list-desc">
                                    <dt>Weekends:</dt>
                                    <dd><span>9:00–18:00</span></dd>
                                </dl>
                            </div>
                            <a class="button button-effect-ujarak button-lg button-secondary-outline button-square"
                                href="about-us.html"><span>book now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Indoor Pool-->
    <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
            <div class="range range-50 range-md-justify range-sm-middle">
                <div class="cell-sm-6 cell-md-5">
                    <h3>Indoor Hotel Pool</h3>
                    <p>
                        The indoor heated pool has vaulted wood beam ceilings. The
                        whirlpool features bay windows and overlooks the pond and
                        the north face of the local beauty spot. For the safety and
                        health reasons, children must be accompanied by an adult
                        when visiting the pool.
                    </p>
                    <p>
                        The serene pool at Royal Villas spa resort and hotel boasts
                        sleek décor that features striking floor-to-ceiling teak
                        columns set against a cool black tile floor. Poolside dining
                        is also available, featuring a selection of dishes from any
                        cuisine you desire that are both healthy and delicious.
                        Daily aqua aerobics classes help keep guests fit while on
                        the road.
                    </p>
                    <a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read
                            more</span></a>
                </div>
                <div class="cell-sm-6">
                    <div class="box-outline box-outline__mod-1">
                        <figure>
                            <img src="images/services-05-546x516.jpg" alt="" width="546" height="516" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
            <div class="range range-10 range-middle">
                <div class="cell-sm-6">
                    <h3>Our Gallery</h3>
                </div>
                <div class="cell-sm-6 text-sm-right">
                    <a class="heading-link link-gray-darker" href="#">See All Photos</a>
                </div>
            </div>
            <hr />
            <div class="isotope-wrap">
                <!-- Isotope Content-->
                <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery"
                    data-lightgallery="group">
                    <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer"></div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".1s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-1-533x800_original.jpg"
                            data-size="533x800" data-lightgallery="item"><img src="images/gallery-1-420x584.jpg" alt=""
                                width="420" height="584" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".2s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-2-1199x800_original.jpg"
                            data-size="1199x800" data-lightgallery="item"><img src="images/gallery-2-420x278.jpg" alt=""
                                width="420" height="278" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".4s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-3-584x800_original.jpg"
                            data-size="584x800" data-lightgallery="item"><img src="images/gallery-3-420x584.jpg" alt=""
                                width="420" height="584" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".5s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-4-1200x800_original.jpg"
                            data-size="1200x800" data-lightgallery="item"><img src="images/gallery-4-420x278.jpg" alt=""
                                width="420" height="278" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".3s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-5-1200x800_original.jpg"
                            data-size="1200x800" data-lightgallery="item"><img src="images/gallery-5-420x278.jpg" alt=""
                                width="420" height="278" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1"
                        data-wow-delay=".6s">
                        <a class="portfolio-item thumbnail-classic" href="images/gallery-6-1200x798_original.jpg"
                            data-size="1200x798" data-lightgallery="item"><img src="images/gallery-6-420x278.jpg" alt=""
                                width="420" height="278" />
                            <figure></figure>
                            <div class="caption">
                                <span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <section class="section section-sm bg-white text-center text-sm-left">
        <div class="shell-wide">
            <h3>Our Blog</h3>
            <hr />
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stagePadding" data-items="1" data-sm-items="2" data-xl-items="3"
                data-dots="false" data-nav="true" data-stage-padding="0" data-lg-stage-padding="100"
                data-xl-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false"
                data-nav-class='["owl-button-prev fl-budicons-free-left161","owl-button-next  fl-budicons-free-right163"]'>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s">
                    <a class="post-box-image" href="blog-post.html">
                        <figure>
                            <img src="images/layout-2-blog-01-460x369.jpg" alt="" width="460" height="369" />
                        </figure>
                    </a>
                    <div class="post-box-minimal-caption">
                        <div class="post-box-minimal-caption-inner">
                            <h5 class="post-box-minimal-title">
                                <a href="blog-post.html">Top 3 Reasons Why Royal Villas Offers the Best
                                    Spa Procedures</a>
                            </h5>
                            <div class="post-box-minimal-meta-bottom">
                                <time class="post-box-icon mdi mdi-clock" datetime="2017">October 12, 2017</time>
                                <p>
                                    <a class="post-box-icon mdi mdi-thumb-up-outline" href="blog-post.html">78</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s">
                    <a class="post-box-image" href="blog-post.html">
                        <figure>
                            <img src="images/layout-2-blog-02-460x369.jpg" alt="" width="460" height="369" />
                        </figure>
                    </a>
                    <div class="post-box-minimal-caption">
                        <div class="post-box-minimal-caption-inner">
                            <h5 class="post-box-minimal-title">
                                <a href="blog-post.html">Featured Therapies and Activities at Royal
                                    Villas Spa Resort and Hotel</a>
                            </h5>
                            <div class="post-box-minimal-meta-bottom">
                                <time class="post-box-icon mdi mdi-clock" datetime="2017">October 26, 2017</time>
                                <p>
                                    <a class="post-box-icon mdi mdi-thumb-up-outline" href="blog-post.html">15</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".3s">
                    <a class="post-box-image" href="blog-post.html">
                        <figure>
                            <img src="images/layout-2-blog-03-460x369.jpg" alt="" width="460" height="369" />
                        </figure>
                    </a>
                    <div class="post-box-minimal-caption">
                        <div class="post-box-minimal-caption-inner">
                            <h5 class="post-box-minimal-title">
                                <a href="blog-post.html">
                                    Why Your Relaxing Getaway Starts Here</a>
                            </h5>
                            <div class="post-box-minimal-meta-bottom">
                                <time class="post-box-icon mdi mdi-clock" datetime="2017">August 23, 2017</time>
                                <p>
                                    <a class="post-box-icon mdi mdi-thumb-up-outline" href="blog-post.html">40</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
