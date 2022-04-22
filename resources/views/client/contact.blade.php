@extends('layouts.client')

@section('content')
    <!--start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <div class="contact">
                    <div class="contact_left">
                        <div class="contact_info">
                            <h3>Find Us Here</h3>
                            <div class="map">
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.08295973414764!2d105.64735608801556!3d21.455668379611208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134e7d9b3a8a77f%3A0x3e583e316858d335!2zS2jDoWNoIHPhuqFuIFBhcmFkaXNl!5e0!3m2!1sen!2sus!4v1650620692652!5m2!1sen!2sus"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="company_address">
                            <h3>Company Information :</h3>
                            <p>500 Lorem Ipsum Dolor Sit,</p>
                            <p>22-56-2-9 Sit Amet, Lorem,</p>
                            <p>USA</p>
                            <p>Phone:(00) 222 666 444</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
                            <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                        </div>
                    </div>
                    <div class="contact_right">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            <form method="post" action="contact-post.html">
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input name="userName" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="userEmail" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>MOBILE</label></span>
                                    <span><input name="userPhone" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>SUBJECT</label></span>
                                    <span>
                                        <textarea name="userMsg"> </textarea>
                                    </span>
                                </div>
                                <div>
                                    <span><input type="submit" value="submit us"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!--start main -->
@endsection
