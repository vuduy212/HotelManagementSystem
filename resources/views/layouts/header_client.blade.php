<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('images/client/logo.png') }}" alt=""></a>
            </div>
            <div class="h_right">
                <!--start menu -->
                <ul class="menu">
                    <li class="active"><a href="{{ route('client.index') }}">hotel</a></li>
                    <li><a href="{{ route('client.rooms') }}">rooms & suits</a></li>
                    <li><a href="{{ route('client.reservation') }}">reservation</a></li>
                    <li><a href="{{ route('client.activities') }}">activities</a></li>
                    <li><a href="{{ route('client.contact') }}">contact</a></li>
                    <div class="clear"></div>
                </ul>
                <!-- start profile_details -->
                <form class="style-1 drp_dwn">
                    <div class="row">
                        <div class="grid_3 columns">
                            <select class="custom-select" id="select-1">
                                <option selected="selected">EN</option>
                                <option>USA</option>
                                <option>AUS</option>
                                <option>UK</option>
                                <option>IND</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
            <div class="top-nav">
                <nav class="clearfix">
                    <ul>
                        <li class="active"><a href="{{ route('client.index') }}">hotel</a></li>
                        <li><a href="{{ route('client.rooms') }}">rooms & suits</a></li>
                        <li><a href="{{ route('client.reservation') }}">reservation</a></li>
                        <li><a href="{{ route('client.activities') }}">activities</a></li>
                        <li><a href="{{ route('client.contact') }}">contact</a></li>
                    </ul>
                    <a href="#" id="pull">Menu</a>
                </nav>
            </div>
        </div>
    </div>
</div>
