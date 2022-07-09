<div class="topbar white topbar-padding">
    <div class="container">
        <div class="topbar-left-items">
            <ul class="toplist toppadding pull-left paddtop1">
                <li class="rightl">Customer Care</li>
                <li>(+84) 905908275</li>
            </ul>
        </div>

        <div class="topbar-right-items pull-right">
            <ul class="toplist toppadding">
                @if (Auth::guard('client')->user() || Auth::check())
                    <li>
                        <span>{{ !empty(Auth::guard('client')->user()) ? Auth::guard('client')->user()->name : (!empty(Auth::check()) ? Auth::user()->name : '') }}</span>
                        <i class="fa fa-user" style="size: 100px;margin-left:5px"></i>
                    <li class="lineright"><a href="/user/logout">Logout</a></li>
                    </li>
                @else
                    <li class="lineright"><a href="/user/login">Login</a></li>
                    <li class="lineright"><a href="/user/register">Register</a></li>
                @endif

                <li><a href="https://www.facebook.com/minhtoan08" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>

                <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <a href="/detail">
                    <i class="fa fa-shopping-cart" style="font-size:20px;margin-left:5px">
                    </i>
                </a>

            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div id="header-sticgky-wrapper" class="sticky-wrapper" style="height: 80px;">
    <div id="header" style="width: 1519px;">
        <div class="container">
            <div class="navbar brown-2 navbar-default yamm">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                        class="navbar-toggle two three"><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="/" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav brown-2 navbar-nav">
                        <li><a href="/" class="dropdown-toggle active">Home</a></li>
                        <li class="dropdown yamm-fw"> <a href="/popular-place" class="dropdown-toggle">Popular
                                Place</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-6 col-md-4 list-unstyled ">
                                                <li>
                                                    <p> North in VietNam </p>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; SaPa</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ha Long
                                                        Bay</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ha Noi</a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-6 col-md-4 list-unstyled ">
                                                <li>
                                                    <p> Central in VietNam </p>
                                                </li>
                                                <li><a href="/danang"><i class="fa fa-angle-right"></i> &nbsp; Da
                                                        Nang</a></li>
                                                <li><a href="/hoian"><i class="fa fa-angle-right"></i> &nbsp; Hoi
                                                        An</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ly Son</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Nha
                                                        Trang</a></li>
                                            </ul>
                                            <ul class="col-sm-6 col-md-4 list-unstyled ">
                                                <li>
                                                    <p> South in VietNam </p>
                                                </li>
                                                <li><a href="/phuquoc"><i class="fa fa-angle-right"></i> &nbsp; Phu
                                                        Quoc</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Vung
                                                        Tau</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Con Dao</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="/service" class="dropdown-toggle">Categories</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li> <a href="/food"><i class="fa fa-angle-right"></i> &nbsp;Food in VietNam</a>
                                </li>
                                <li> <a href="/beach"><i class="fa fa-angle-right"></i> &nbsp;Beaches</a> </li>
                            </ul>
                        </li>
                        <li><a href="/handbook" class="dropdown-toggle">Handbook</a></li>
                        <li><a href="/booking" class="dropdown-toggle">Booking</a></li>
                        <li><a href="/contact" class="dropdown-toggle">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
