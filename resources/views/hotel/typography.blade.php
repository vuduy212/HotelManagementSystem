@extends('layouts.hotel')
@section('content')
    <!-- Breadcrumbs & Page title-->
    <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
            <div class="range range-xs-center">
                <div class="cell-xs-12 cell-xl-11">
                    <h2 class="text-white">Typography</h2>
                    <ul class="breadcrumbs-custom">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Typography</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Base typography-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <ul class="list-xl">
                        <li>
                            <h1>H1 Heading</h1>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                        <li>
                            <h2>H2 Heading</h2>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                        <li>
                            <h3>H3 Heading</h3>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                        <li>
                            <h4>H4 Heading</h4>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                        <li>
                            <h5>H5 Heading</h5>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                        <li>
                            <h6>H6 Heading</h6>
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Blockquote-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h3>Blockquote</h3>
                    <!-- Blockquote default-->
                    <div class="quote-default quote-default-left">
                        <div class="quote-body">
                            <div class="unit unit-xs-horizontal unit-xs-top unit-spacing-sm">
                                <div class="unit__left">
                                    <svg x="0px" y="0px" width="37px" height="27px" viewbox="0 0 37 27">
                                        <path
                                            d="M16.916,18.73c0,2.351-0.833,4.319-2.499,5.901C12.754,26.208,10.786,27,8.516,27  c-2.268,0-4.255-0.792-5.96-2.369c-1.703-1.582-2.552-3.477-2.552-5.679c0-2.208,1.022-4.891,3.064-8.054L9.879-0.018h6.585  l-4.202,11.471C15.365,12.847,16.916,15.275,16.916,18.73z M36.99,18.73c0,2.351-0.833,4.319-2.499,5.901  C32.828,26.208,30.86,27,28.588,27c-2.269,0-4.256-0.792-5.959-2.369c-1.702-1.582-2.555-3.477-2.555-5.679  c0-2.208,1.025-4.891,3.066-8.054l6.813-10.916h6.581l-4.197,11.471C35.437,12.847,36.99,15.275,36.99,18.73z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="unit__body">
                                    <p>
                                        <q>Welcome to our wonderful world. We sincerely hope that each and every user
                                            entering our website will find exactly what he/she is looking for. With advanced
                                            features of activating account and new login widgets, you will definitely have a
                                            great experience of using our web page.</q>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <cite>Dennis Williams</cite>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HTML Text Elements-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h3>HTML Text Elements</h3>
                    <div class="text-block"><span>Welcome to our wonderful world.</span> <span class="text-bold">This is a
                            bold text</span>
                        <mark>This is a highlighted text</mark> <span>We sincerely hope that each and every user entering
                            our website will find exactly what he/she is looking for. With advanced features of activating
                            account and new login</span> <span class="tooltip-custom"><span data-toggle="tooltip"
                                data-placement="top" title="Welcome to our wonderful world">Tooltips</span></span>
                        <span>widgets, you will definitely have a great experience of using our web page.</span> <span
                            class="text-strike">This is a strikethrough text</span> <span class="text-underline">This is an
                            underlined text.</span> <a href="#">Link</a> <a class="hover" href="#">Hover
                            link</a> <a class="active" href="#">Press link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unordered List-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range spacing-55">
                <div class="cell-md-8">
                    <h3>Unordered List</h3>
                    <div>
                        <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service
                            based on your requests.</p>
                        <ul class="marked-list inset-left-25">
                            <li>Consulting</li>
                            <li>Customer Service</li>
                            <li>Innovation</li>
                            <li>Management</li>
                            <li>Ethics</li>
                        </ul>
                        <p>We hope that with our services you will receive the most personalized help in purchasing any kind
                            of products you are looking for.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ordered List-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range spacing-55">
                <div class="cell-md-8">
                    <h3>Ordered List</h3>
                    <div>
                        <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service
                            based on your requests.</p>
                        <ul class="ordered-list inset-left-25">
                            <li>Consulting</li>
                            <li>Customer Service</li>
                            <li>Innovation</li>
                            <li>Management</li>
                            <li>Ethics</li>
                        </ul>
                        <p>We hope that with our services you will receive the most personalized help in purchasing any kind
                            of products you are looking for.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Icon List-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <h3>Icon List</h3>
            <div class="range range-50">
                <div class="cell-xs-6 cell-md-4">
                    <article class="box-minimal">
                        <div class="box-minimal-icon-big hotel-icon-03"></div>
                        <h4 class="box-minimal-title">Best Service</h4>
                        <div class="box-minimal-divider"></div>
                        <div class="box-minimal-text">Our mission is to attract and retain customers by providing Best in
                            Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.
                        </div>
                    </article>
                </div>
                <div class="cell-xs-6 cell-md-4">
                    <article class="box-minimal">
                        <div class="box-minimal-icon-big hotel-icon-12"></div>
                        <h4 class="box-minimal-title">Reputation</h4>
                        <div class="box-minimal-divider"></div>
                        <div class="box-minimal-text">We have established a strong presence in the industry. Our
                            award-winning services earn a reputation for quality and excellence that few can rival.</div>
                    </article>
                </div>
                <div class="cell-xs-6 cell-md-4">
                    <article class="box-minimal">
                        <div class="box-minimal-icon-big hotel-icon-26"></div>
                        <h4 class="box-minimal-title">Safety & Security</h4>
                        <div class="box-minimal-divider"></div>
                        <div class="box-minimal-text">Safety for our employees, customers and the community we work with
                            will always remain our primary focus in all the policies, procedures and programs.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Centered Image-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h3>Centered Image</h3>
                    <figure class="figure-default"><img src="images/typography-1-770x485.jpg" alt="" width="770"
                            height="485" />
                        <figcaption>
                            <p>Affordable spa & hospitality services</p>
                        </figcaption>
                    </figure>
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                        find exactly what he/she is looking for. With advanced features of activating account and new login
                        widgets, you will definitely have a great experience of using our web page.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Left Image-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h3>Left Image</h3>
                    <div class="range range-30">
                        <div class="cell-sm-6"><img src="images/typography-2-350x220.jpg" alt="" width="350"
                                height="220" />
                        </div>
                        <div class="cell-sm-6">
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Right Image-->
    <section class="section-sm bg-white text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h3>Right Image</h3>
                    <div class="range range-30 range-sm-reverse">
                        <div class="cell-sm-6"><img src="images/typography-2-350x220.jpg" alt="" width="350"
                                height="220" />
                        </div>
                        <div class="cell-sm-6">
                            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our
                                website will find exactly what he/she is looking for. With advanced features of activating
                                account and new login widgets, you will definitely have a great experience of using our web
                                page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
