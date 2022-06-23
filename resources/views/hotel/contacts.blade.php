@extends('layouts.hotel')
@section('content')
    <!-- Breadcrumbs & Page title-->
    <section class="section-md text-center bg-image breadcrumbs-02">
        <div class="shell shell-fluid">
            <div class="range range-xs-center">
                <div class="cell-xs-12 cell-xl-11">
                    <h2 class="text-white">Contacts</h2>
                    <ul class="breadcrumbs-custom">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-md bg-white text-center">
        <div class="shell">
            <div class="range range-50 range-md-center">
                <div class="cell-sm-8">
                    <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact
                            form to ask a question about our services. We would be pleased to answer your
                            questions.</p>
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                            method="post" action="bat/rd-mailform.php">
                            <div class="range range-sm-bottom spacing-20">
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="name"
                                            data-constraints="@Required">
                                        <label class="form-label" for="contact-first-name">Your name</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-last-name" type="text" name="phone"
                                            data-constraints="@Numeric">
                                        <label class="form-label" for="contact-last-name">Phone</label>
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                        <label class="form-label" for="contact-message">Your Message</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-primary button-square button-block button-effect-ujarak"
                                        type="submit"><span>send message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-sm-4">
                    <aside class="contact-box-aside text-left">
                        <div class="range range-50">
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> get Social</p>
                                <hr class="divider divider-left divider-custom">
                                <ul class="list-inline">
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-instagram" href="#"></a>
                                    </li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-facebook" href="#"></a>
                                    </li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-youtube" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Phone</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span
                                            class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span>
                                    </div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="tel:#">+84
                                            (96) 777–5035</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Address</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span
                                            class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span>
                                    </div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark"
                                            href="contacts.html">81/79 Cau Giay, Ha Noi, Vietnam</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> opening hours</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span
                                            class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span>
                                    </div>
                                    <div class="unit__body text-gray-darker">
                                        <p>Daytime: 09:00 – 21:00 |
                                            Night: 21:00 – 09:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
