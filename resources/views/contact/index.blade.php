<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">

<head>
    <title>Wanderlust</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="css/default.css" type="text/css" />
    <link rel="stylesheet" href="css/layouts.css" type="text/css" />
    <link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="css/et-line-font/et-line-font.css">


    <link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">

    <!-- Remove the below comments to use your color option -->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

</head>

<body>
    <div class="site_wrapper">
        <div class="topbar white topbar-padding">
            <div class="container">
                <div class="topbar-left-items">
                    <ul class="toplist toppadding pull-left paddtop1">
                        <li class="rightl">Customer Care</li>
                        <li>(+84) 905908275</li>
                    </ul>
                </div>
                <!--end left-->

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">
                        @if (Auth::guard('client')->user())
                            <li>
                                <i class="fa fa-user" style="size: 100px"></i>
                            <li class="lineright"><a href="/user/logout">Logout</a></li>
                            </li>
                        @else
                            <li class="lineright"><a href="/user/login">Login</a></li>
                            <li class="lineright"><a href="/user/register">Register</a></li>
                        @endif
                        <li><a href="https://www.facebook.com/minhtoan08"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>

                        <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div id="header-sticky-wrapper" class="sticky-wrapper" style="height: 80px;">
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
                                <li><a href="/" class="dropdown-toggle ">Home</a></li>
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
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp;
                                                                SaPa</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ha Long
                                                                Bay</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ha
                                                                Noi</a></li>
                                                    </ul>
                                                    <ul class="col-sm-6 col-md-4 list-unstyled ">
                                                        <li>
                                                            <p> Central in VietNam </p>
                                                        </li>
                                                        <li><a href="/danang"><i class="fa fa-angle-right"></i> &nbsp;
                                                                Da Nang</a></li>
                                                        <li><a href="/hoian"><i class="fa fa-angle-right"></i> &nbsp;
                                                                Hoi An</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Ly
                                                                Son</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Nha
                                                                Trang</a></li>
                                                    </ul>
                                                    <ul class="col-sm-6 col-md-4 list-unstyled ">
                                                        <li>
                                                            <p> South in VietNam </p>
                                                        </li>
                                                        <li><a href="/phuquoc"><i class="fa fa-angle-right"></i> &nbsp;
                                                                Phu Quoc</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Vung
                                                                Tau</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Con
                                                                Dao</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown"> <a href="/service" class="dropdown-toggle">Categories</a>
                                    <ul class="dropdown-menu five" role="menu">
                                        <li> <a href="/food"><i class="fa fa-angle-right"></i> &nbsp;Food in
                                                VietNam</a> </li>
                                        <li> <a href="/beach"><i class="fa fa-angle-right"></i>
                                                &nbsp;Beaches</a> </li>
                                    </ul>
                                </li>

                                <li><a href="/handbook" class="dropdown-toggle">Handbook</a></li>
                                <li><a href="/booking" class="dropdown-toggle">Booking</a></li>
                                <li><a href="/contact" class="dropdown-toggle active">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end menu-->
            <div class="clearfix"></div>

            <div class="clearfix"></div>


            <section class="sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="smart-forms bmargin">
                                <h3 class=" roboto-slab">Contact Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                    Praesent mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing
                                    elit. Suspendisse et justo. augue.</p>
                                <br />
                                <br />
                                <form method="post" action="php/smartprocess.php" id="smart-form">
                                    <div>
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="sendername" id="sendername"
                                                    class="gui-input" placeholder="Enter name">
                                                <span class="field-icon"><i class="fa fa-user"></i></span>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="email" name="emailaddress" id="emailaddress"
                                                    class="gui-input" placeholder="Email address">
                                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section colm colm6">
                                            <label class="field prepend-icon">
                                                <input type="tel" name="telephone" id="telephone" class="gui-input"
                                                    placeholder="Telephone">
                                                <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="sendersubject" id="sendersubject"
                                                    class="gui-input" placeholder="Enter subjec">
                                                <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                                <span class="field-icon"><i class="fa fa-comments"></i></span> <span
                                                    class="input-hint"> <strong>Hint:</strong> Please enter between
                                                    80 - 300 characters.</span>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <!--<div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?<?php echo time(); ?>" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div>
                        </div>-->

                                        <div class="result"></div>
                                        <!-- end .result  section -->

                                    </div>
                                    <!-- end .form-body section -->
                                    <div class="form-footer">
                                        <button type="submit" data-btntext-sending="Sending..."
                                            class="button btn-primary brown-2">Submit</button>
                                        <button type="reset" class="button"> Cancel </button>
                                    </div>
                                    <!-- end .form-footer section -->
                                </form>
                            </div>
                            <!-- end .smart-forms section -->

                        </div>
                        <div class="col-md-4 bmargin">
                            <h3 class="roboto-slab">Address Info</h3>
                            <h6><strong>Company Name</strong></h6>
                            254 Nguyen Van Linh <br />
                            Telephone: (+84) 905908275<br />
                            FAX: (+84) 905908275<br />
                            <br />
                            E-mail: <a href="mailto:email@example.com">andreapirlo257@gmail.com</a><br />
                            Website: <a href="index.html">www.example.com</a>
                            <div class="clearfix"></div>
                            <br />
                            <h3 class="roboto-slab">Find the Address</h3>
                            <div id="map" class="map">
                                <p>This will be replaced with the Google Map.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end section-->
            <div class="clearfix"></div>


            @include('share.foot')
            <!--end section-->
            <div class="clearfix"></div>

            <!--end section-->
            <div class="clearfix"></div>

            <a href="#" class="scrollup brown-2"></a><!-- end scroll to top of the page-->
        </div>
        <!-- end site wraper -->


        <!-- ============ JS FILES ============ -->

        <script type="text/javascript" src="js/universal/jquery.js"></script>
        <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/mainmenu/customeUI.js"></script>
        <script src="js/scrolltotop/totop.js"></script>
        <script src="js/mainmenu/jquery.sticky.js"></script>

        <script type="text/javascript" src="js/smart-forms/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/smart-forms/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/smart-forms/additional-methods.min.js"></script>
        <script type="text/javascript" src="js/smart-forms/smart-form.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/gmaps/jquery.gmap.js"></script>
        <script type="text/javascript" src="js/gmaps/examples.js"></script>
        <script src="js/scripts/functions.js" type="text/javascript"></script>
</body>

</html>
