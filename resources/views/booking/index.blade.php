<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Wanderlust</title>
</head>

<body>
    <header style="height:  60vh;
                        min-height: 200px;
                        background-image: url('https://themes.pixelstrap.com/rica/assets/images/hotel/background/9.jpg');
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
        " class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="fw-light">Booking</h1>
                    <a style="color: black; text-decoration-line: none;" href="/">Home</a><span>>></span> Booking
                    <p class="lead">A great starter layout for a landing page</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Bắt đầu phần đặt vé -->
    {{-- <div class="section-search">
        <div class="container-fluid">
            <div class="row" style="background-color: rgb(255, 255, 255);">
                <div class="container pt-3">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <div class="nav nav-pills bg-white" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Flights</a>
                                <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false"> Hotels</a>
                                <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Car Rents</a>
                                <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill"
                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false"> Cruises</a>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-content py-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="block-17">
                                <form class="d-block d-lg-flex">
                                    <div class="fields d-block d-lg-flex">
                                        <div class="form-group">
                                            <span class="form-label">Your Destination</span>
                                            <div class="textfield-search one-third"><input type="text"
                                                    class="form-control" placeholder="Enter your Destination"></div>
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <div class="check-in"><input id="dp1" type="date"
                                                    class="form-control input-md" placeholder="Check-in date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Check Out</span>
                                            <div class="check-out"><input id="dp2" type="date"
                                                    class="form-control input-md" placeholder="Check-out date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Quantity</span>
                                            <div class="select-wrap one-third">
                                                <select name="" id="" class="form-control">
                                                    <option value="">Guest</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input onclick="window.location.href='/booking/flight-booking'" type="button"
                                            class="search-submit btn btn-info ml-2" value="Find Flights">
                                    </div>

                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="block-17">
                                <form action="" method="post" class="d-block d-lg-flex">
                                    <div class="fields d-block d-lg-flex">
                                        <div class="form-group">
                                            <span class="form-label">Search</span>
                                            <div class="textfield-search one-third"><input type="text"
                                                    class="form-control" placeholder="Enter your Hotels"></div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <div class="check-in"><input id="dp1" type="date"
                                                    class="form-control clickable input-md" placeholder="Check-in date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Check Out</span>
                                            <div class="check-out"><input id="dp2" type="date"
                                                    class="form-control clickable input-md"
                                                    placeholder="Check-out date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Quantity</span>
                                            <div class="select-wrap one-third">
                                                <select name="" id="" class="form-control">
                                                    <option value="">Guest</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input href="#!" type="button" class="search-submit btn btn-info ml-2"
                                        value="Find Hotels">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="block-17">
                                <form action="" method="post" class="d-block d-lg-flex">
                                    <div class="fields d-block d-lg-flex">
                                        <div class="form-group">
                                            <span class="form-label">Your Destination</span>
                                            <div class="textfield-search one-third"><input type="text"
                                                    class="form-control" placeholder="Enter your Destination"></div>
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">Start date</span>
                                            <div class="check-in"><input id="dp1" type="date"
                                                    class="form-control clickable input-md">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Return date</span>
                                            <div class="check-out"><input id="dp2" type="date"
                                                    class="form-control clickable input-md">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Quantity</span>
                                            <div class="select-wrap one-third">
                                                <select name="" id="" class="form-control">
                                                    <option value="">Guest</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="search-submit btn btn-info ml-2" value="Find Car">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="block-17">
                                <form action="" method="post" class="d-block d-lg-flex">
                                    <div class="fields d-block d-lg-flex">
                                        <div class="form-group">
                                            <span class="form-label">Your Destination</span>
                                            <div class="textfield-search one-third"><input type="text"
                                                    class="form-control" placeholder="Enter your Destination"></div>
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">Start date</span>
                                            <div class="check-in"><input id="dp1" type="date"
                                                    class="form-control clickable input-md">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Categories</span>
                                            <div class="select-wrap one-third one-third-1">
                                                <div class="icon"></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Suite</option>
                                                    <option value="">Super Deluxe</option>
                                                    <option value="">Economy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="search-submit btn btn-info ml-2" value="Find Cruise">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Kết thúc phầm đặt vé -->


    <!-- Phần trending cities -->
    <div class="container">
        <div style="font-size: 40px; text-align: center;" class="alert alert-dark mt-5" role="alert">
            <b>Trending Cities</b>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2021-05/Golden%20Bridge%20Da%20Nang%20Vietnam%20Tourism.jpg?itok=u1yG3LSn"
                                alt="">
                            <title>Đà Nẵng</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Đà Nẵng</h5>
                            </text>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#!">
                                            <button type="button" class="btn btn-info">Booking now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2017-11/things%20to%20do%20in%20hcmc-3.jpg?itok=7TX7muVt"
                                alt="">
                            <title>Sài Gòn</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Sài Gòn</h5>
                            </text>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#!">
                                            <button type="button" class="btn btn-info">Booking now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2021-05/Hanoi%20red%20bridge%20Vietnam%20Tourism.jpg?itok=_dzbkJwP"
                                alt="">
                            <title>Hà Nội</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Hà Nội</h5>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            {{-- <button type="button" href="/booking/hotel-ha-noi" class="btn btn-sm btn-outline-primary">Booking now</button> --}}
                                            <a href="/booking/hotel-ha-noi">
                                                <button type="button" class="btn btn-info">Booking now</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2021-05/Tu%20Hieu%20Pagoda%20Hue%20Vietnam%20Tourism.jpg?itok=mwbhuyQ7"
                                alt="">
                            <title>Huế</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Huế</h5>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#!">
                                                <button type="button" class="btn btn-info">Booking now</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2021-05/Da%20Lat%20Central%20Market%20Vietnam%20Tourism.jpg?itok=gHf82Z_a"
                                alt="">
                            <title>Đà Lạt</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Đà Lạt</h5>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#!">
                                                <button type="button" class="btn btn-info">Booking now</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://vietnam.travel/sites/default/files/styles/article_photo_large/public/2017-11/things%20to%20do%20in%20hoi%20an%20vietnam-4.jpg?itok=ROY29R0e"
                                alt="">
                            <title>Hội An</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                                <h5 style="text-align: center; padding-top: 10px;">Hội An</h5>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#!">
                                                <button type="button" class="btn btn-info">Booking now</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Phần làm recommend hotel -->




    <section class="section-padding hotels-sec bg-light-white">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3>Recommend Hotels</h3>
                    <div class="section-description">
                        <p class="text-light-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Id sunt iure illo exercitationem. Suscipit, harum, enim, dignissimos voluptatem consectetur
                            repellat distinctio officiis libero laudantium qui animi inventore quas ratione. Vel.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top text-center">
                            <a role="button" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left fa-2x"></i></a>
                            <a role="button" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right fa-2x"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/2486094/-1/b5d9b23f063e07ea6f8f7855e9ce2cd2.jpg?ca=7&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Dana Marina Boutique Hotel</h4>
                                                <p class="card-text">Phước Mỹ,Đà Nẵng</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/149036/-1/eb1f0c5d910a31c8b5c12d3d8875f4ca.jpg?ca=11&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Muong Thanh Luxury Song Han Hotel</h4>
                                                <p class="card-text">Hải Châu,Đà Nẵng</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/4874086/0/c6bb3b8ad7bb955bab833a039324f060.jpg?ca=23&ce=0&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Somerset Ho Chi Minh City Serviced Residence
                                                </h4>
                                                <p class="card-text">Quận 1,Hồ Chí Minh</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/836781/-1/f2fa134a197be1e3f9f27c6f6260ff19.jpg?ca=27&ce=0&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Terracotta Hotel and Resort Dalat</h4>
                                                <p class="card-text">Hồ Tuyền Lâm,Đà Lạt</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/6600618/-1/27731ed0841b4463902d36b6bb1a5805.jpg?ca=13&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Khách sạn Colline (Hôtel Colline)</h4>
                                                <p class="card-text">Trung tâm Đà Lạt,Đà Lạt</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/90776/0/0721cef12bb6e35a4ba5cdc5883144c5.jpg?ca=7&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">InterContinental Hanoi Westlake</h4>
                                                <p class="card-text">Quận Tây Hồ, Hà Nội - cách trung tâm 2,3 km
                                                </p>
                                                <a href="/booking/hotel-ha-noi/detail">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/247990/-1/d8c75ff33faeb682607e5eb04dca8b64.jpg?ca=13&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">The Hanoi Club Hotel & Residences</h4>
                                                <p class="card-text">Quận Tây Hồ, Hà Nội - cách trung tâm 1,4 km
                                                </p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/2019/-1/a2f34b2902d36d6751919bb776574071.jpg?ca=12&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Victoria Hoi An Beach Resort & Spa</h4>
                                                <p class="card-text">Cửa Đại, Hội An - cách trung tâm 4,5 km</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                            <img class="card-img-top"
                                                src="https://pix8.agoda.net/hotelImages/295/295316/295316_17090411540055947963.jpg?ca=6&ce=1&s=450x450"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Mia Resort Nha Trang</h4>
                                                <p class="card-text">Cam Hải Đông, Nha Trang - cách trung tâm 10,2
                                                    km</p>
                                                <a href="#!">
                                                    <button type="button" class="btn btn-info">Booking now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.Third slide-->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/minhtoan08/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Wander Lust
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            New Blog
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Clean and Moder</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Quick links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">WanderLust Introduction</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">VietNam Tourism</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Customer Reviews</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">New tourist destinations</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Maps</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i>Đà Nẵng</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            andreapirlo257@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i>(+84) 905 908 275</p>
                        <p><i class="fas fa-print me-3"></i>(+84) 905 908 275</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->


    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
