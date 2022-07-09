<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="WAy7qbyL"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Wanderlust</title>
</head>

<body>
    <header style="height:  60vh;
                                min-height: 200px;
                                background-image: url('https://themes.pixelstrap.com/rica/assets/images/inner-pages/bg-bread.jpg');
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                " class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <div class="text-white">
                        <h1 class="fw-light text-white">HOTELS IN HÀ NỘI</h1>
                        <a style="color: white; text-decoration-line: none;" href="/">Home</a><span>>></span> <a
                            style="color: white; text-decoration-line: none;" href="/booking">Booking</a>
                        <span>>></span> <a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi">Hotels In Ha Noi</a>
                        <span>>></span> Hotel Details
                    </div>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <div class="hotel-title">
                    <div class="hotel-name">
                        <div class="row">
                            <div class="col-10">
                                <div class="top" style="margin-bottom: 15px;">
                                    <h2>InterContinental Ha Noi WestLake</h2>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star text-dark"></i>
                                    </div>
                                    <div class="buttons">
                                        <a href="#" class="btn btn-solid"><i class="far fa-share-square"></i>
                                            Share</a>
                                        <a href="#" class="btn btn-solid"><i class="far fa-heart"></i> Save</a>
                                    </div>
                                </div>
                                {{-- <p>InterContinental Hà Nội Westlake, 05 P. Từ Hoa, Quảng An, Tây Hồ, Hà Nội</p> --}}
                                <a style="color: rgb(0, 0, 0); text-decoration-line: none;"
                                    href="#maps">InterContinental Hà
                                    Nội Westlake, 05 P. Từ Hoa, Quảng An, Tây Hồ, Hà
                                    Nội</a>
                            </div>
                            <div class="col-2">
                                <h3 class="price"><b>$245</b> <span><small>/ per night</small></span></h3>
                                @if (Auth::guard('client')->user() || Auth::check())
                                    <a href="/booking/hotel-ha-noi/detail/view-booking">
                                        <button type="button" class="btn btn-info">Book This Now</button>
                                    </a>
                                @else
                                    <a href="/user/login">
                                        <button type="button" class="btn btn-info">Book This Now</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-1 zoom-gallery">
        <div class="container p-0">
            <h3>Images</h3><br>
            <div class="row m-0">
                <div class="col-md-6 p-0">
                    <a href="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/10.jpg"
                        class="bg-size blur-up lazyloaded"
                        style="background-image: url(https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/10.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/10.jpg"
                            class="img-fluid blur-up lazyload bg-img" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-6 p-0">
                    <a href="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/6.jpg"
                        class="bg-size blur-up lazyloaded"
                        style="background-image: url(https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/6.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/6.jpg"
                            class="img-fluid blur-up lazyload bg-img" alt="">
                    </a>
                    <a href="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/7.jpg"
                        class="bg-size blur-up lazyloaded"
                        style="background-image: url(https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/7.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/7.jpg"
                            class="img-fluid blur-up lazyload bg-img" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-6 p-0">
                    <a href="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/8.jpg"
                        class="bg-size blur-up lazyloaded"
                        style="background-image: url(https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/8.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/8.jpg"
                            class="img-fluid blur-up lazyload bg-img" alt="">
                    </a>
                    <a href="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/11.jpg"
                        class="bg-size blur-up lazyloaded"
                        style="background-image: url(https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/11.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="https://themes.pixelstrap.com/rica/assets/images/single-hotel/slider/11.jpg"
                            class="img-fluid blur-up lazyload bg-img" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="single-section small-section bg-white" style="padding-top: 50px;">
        <div class="container">
            <h3>Information</h3>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="description-section">
                        <div>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-room-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-room" type="button" role="tab" aria-controls="pills-room"
                                        aria-selected="true">Rooms</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-about-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-about" type="button" role="tab"
                                        aria-controls="pills-about" aria-selected="false">About</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-fac-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-fac" type="button" role="tab" aria-controls="pills-fac"
                                        aria-selected="false">Facility</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-loc-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-loc" type="button" role="tab" aria-controls="pills-loc"
                                        aria-selected="false">Location</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-rev-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-rev" type="button" role="tab" aria-controls="pills-rev"
                                        aria-selected="false">Reviews</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-pol-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-pol" type="button" role="tab" aria-controls="pills-pol"
                                        aria-selected="false">Policies</button>
                                </li>
                            </ul>
                            <div style="padding: 30px; margin-bottom: 30px;" class="tab-content"
                                id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-room" role="tabpanel"
                                    aria-labelledby="pills-room-tab">
                                    <div class="row">
                                        <div class="col-4">
                                            <div style="margin-bottom: 26px;" class="card">
                                                <div class="bg-image hover-overlay ripple"
                                                    data-mdb-ripple-color="light">
                                                    <img src="https://pix8.agoda.net/hotelImages/6535380/77755108/6a58f184e2cd259756b8ba788c4ba261.jpg?ca=25&ce=0"
                                                        class="img-fluid" />
                                                    <a href="#!">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.15);">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Classic Room</h5>
                                                    <p class="card-text">
                                                        <i class="fa-solid fa-person-shelter"></i> Diện tích phòng:
                                                        43 m²<br>
                                                        <i class="fa-solid fa-location-arrow"></i> Hướng phòng:
                                                        Thành phố<br>
                                                        <i class="fa-solid fa-bed"></i> 2 giường đơn hoặc 1 giường
                                                        đôi
                                                    </p>
                                                    <a href="#!">
                                                        <button type="button" class="btn btn-info">Booking
                                                            now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="margin-bottom: 26px;" class="card">
                                                <div class="bg-image hover-overlay ripple"
                                                    data-mdb-ripple-color="light">
                                                    <img src="https://pix8.agoda.net/hotelImages/6535380/77755108/6a58f184e2cd259756b8ba788c4ba261.jpg?ca=25&ce=0"
                                                        class="img-fluid" />
                                                    <a href="#!">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.15);">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Upgraded Classic</h5>
                                                    <p class="card-text">
                                                        <i class="fa-solid fa-person-shelter"></i> Diện tích phòng:
                                                        43 m²<br>
                                                        <i class="fa-solid fa-location-arrow"></i> Hướng phòng:
                                                        Thành phố<br>
                                                        <i class="fa-solid fa-bed"></i> 2 giường đơn hoặc 1 giường
                                                        đôi
                                                    </p>
                                                    <a href="#!">
                                                        <button type="button" class="btn btn-info">Booking
                                                            now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="margin-bottom: 26px;" class="card">
                                                <div class="bg-image hover-overlay ripple"
                                                    data-mdb-ripple-color="light">
                                                    <img src="https://pix8.agoda.net/hotelImages/90776/1271000/186533378a480565cf70d1242c0c91d1.jpeg?ca=28&ce=0"
                                                        class="img-fluid" />
                                                    <a href="#!">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.15);">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">King Bed Grand Westlake Suite</h5>
                                                    <p class="card-text">
                                                        <i class="fa-solid fa-person-shelter"></i> Diện tích phòng:
                                                        80 m²<br>
                                                        <i class="fa-solid fa-location-arrow"></i> Hướng phòng:
                                                        Hồ<br>
                                                        <i class="fa-solid fa-bed"></i> 1 giường lớn
                                                    </p>
                                                    <a href="#!">
                                                        <button type="button" class="btn btn-info">Booking
                                                            now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="margin-bottom: 26px;" class="card">
                                                <div class="bg-image hover-overlay ripple"
                                                    data-mdb-ripple-color="light">
                                                    <img src="https://pix8.agoda.net/hotelImages/90776/1271004/0d6fccdcab784194ed9c3ecb6f69585b.jpg?ca=20&ce=0"
                                                        class="img-fluid" />
                                                    <a href="#!">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.15);">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">2 Twin Beds Classic Lake View</h5>
                                                    <p class="card-text">
                                                        <i class="fa-solid fa-person-shelter"></i> Diện tích phòng:
                                                        43 m²<br>
                                                        <i class="fa-solid fa-location-arrow"></i> Hướng phòng:
                                                        Hồ<br>
                                                        <i class="fa-solid fa-bed"></i> 2 giường đơn
                                                    </p>
                                                    <a href="/booking/hotel-ha-noi/detail/view-booking">
                                                        <button type="button" class="btn btn-info">Booking
                                                            now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-about" role="tabpanel"
                                    aria-labelledby="pills-about-tab">
                                    <div class="about menu-part tab-pane fade active show" id="about">
                                        <h6>Enjoy a luxurious experience!</h6>
                                        <p>A luxurious hotel in Viet Nam, InterContinental Ha Noi WestLake is just
                                            7899 meter away from the main center.
                                            Featuring palatial space, modern architecture and stylish interiors,
                                            this hotel
                                            is an ideal choice for a peaceful relaxation or a business
                                            trip.</p>
                                        <h6>Hotel Facilities</h6>
                                        <p>The classy hotel has a swimming pool, spa and a fitness centre. It also
                                            features
                                            a well-appointed conference hall and a spacious harbour banquet
                                            conference
                                            centre for events and for meeting business needs. Complimentary
                                            Wi-Fi is provided on-premises. Other services offered are travel desk,
                                            car
                                            parking and credit card acceptance.</p>
                                        <h6>Dining</h6>
                                        <p>The luxurious hotel in dubai features an in-house restaurant and a bar.
                                            Flame N
                                            Grill restaurant operates from 7.30 AM till midnight. It offers
                                            multi-cuisine
                                            menu including Continental, Chinese, Indian and Goan dishes.
                                            Pool Deck BAR is a paradise providing a range of beverages. Featuring a
                                            water
                                            fountain, it also offers a pleasant ambience to enjoy your drinks.</p>
                                        <h6>Room Facilities</h6>
                                        <p class="mb-0">This hotel has 150 air-conditioned rooms
                                            including 50 Superior
                                            Rooms, 30 Deluxe Rooms, 10 Super Deluxe Rooms, 2 Classic Rooms and 5
                                            Duplex
                                            Rooms. Most of the rooms have balconies offering spectacular views of
                                            the
                                            environs
                                            and a few offering phenomenal views of the pool. With contemporary
                                            furniture and
                                            elegant decor, all the rooms ensure utmost comfort for the guests. Some
                                            in-room
                                            amenities include LCD TV with satellite connection,
                                            minibar and an electronic safe deposit box.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-fac" role="tabpanel"
                                    aria-labelledby="pills-fac-tab">
                                    <div class="menu-part tab-pane fade facility active show" id="facility">
                                        <div class="row">
                                            <div class=" col-6">
                                                <h6><img src="https://themes.pixelstrap.com/rica/assets/images/icon/hotel/verified.png"
                                                        class="img-fluid blur-up lazyloaded" alt=""> Basic
                                                    Facility</h6>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> Free Wi-Fi</li>
                                                    <li><i class="fas fa-check"></i> Room Service</li>
                                                    <li><i class="fas fa-check"></i> Elevator Lift</li>
                                                    <li><i class="fas fa-check"></i> Laundry Service</li>
                                                    <li><i class="fas fa-check"></i> Power Backup</li>
                                                    <li><i class="fas fa-check"></i> Free Parking</li>
                                                </ul>
                                            </div>
                                            <div class=" col-6">
                                                <h6><img src="https://themes.pixelstrap.com/rica/assets/images/icon/hotel/credit-card.png"
                                                        class="img-fluid blur-up lazyloaded" alt="">
                                                    Payment Mode</h6>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> Visa Card</li>
                                                    <li><i class="fas fa-check"></i> Master Card</li>
                                                    <li><i class="fas fa-check"></i> Debit Card</li>
                                                    <li><i class="fas fa-check"></i> Cash</li>
                                                    <li><i class="fas fa-check"></i> Online Banking</li>
                                                </ul>
                                            </div>
                                            <div class=" col-6">
                                                <h6><img src="https://themes.pixelstrap.com/rica/assets/images/icon/hotel/cctv.png"
                                                        class="img-fluid blur-up lazyloaded" alt=""> Security
                                                </h6>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> Security Guard</li>
                                                    <li><i class="fas fa-check"></i> CCTV</li>
                                                    <li><i class="fas fa-check"></i> Emergency Exit</li>
                                                    <li><i class="fas fa-check"></i> Doctor on call</li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6><img src="https://themes.pixelstrap.com/rica/assets/images/icon/hotel/tray.png"
                                                        class="img-fluid blur-up lazyloaded" alt=""> Food &amp;
                                                    drinks</h6>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> Restaurant</li>
                                                    <li><i class="fas fa-check"></i> Bar</li>
                                                </ul>
                                                <h6 class="mt-2"><img
                                                        src="https://themes.pixelstrap.com/rica/assets/images/icon/hotel/barbell.png"
                                                        class="img-fluid blur-up lazyloaded" alt=""> Activities
                                                </h6>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> Gym</li>
                                                    <li><i class="fas fa-check"></i> Game Zone</li>
                                                    <li><i class="fas fa-check"></i> Swimming Pool</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-loc" role="tabpanel"
                                    aria-labelledby="pills-loc-tab">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873639.245255463!2d104.63128181216555!3d18.535642101687372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa5504cf4f8d%3A0x38355eb7fe4e696d!2sInterContinental%20H%C3%A0%20N%E1%BB%99i%20Westlake!5e0!3m2!1svi!2s!4v1648287177814!5m2!1svi!2s"
                                        width="1280" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                                <div class="tab-pane fade" id="pills-rev" role="tabpanel"
                                    aria-labelledby="pills-rev-tab">
                                    <div class="fb-comments"
                                        data-href="http://127.0.0.1:8000/booking/hotel-ha-noi/detail" data-width=""
                                        data-numposts="6">
                                    </div>
                                    <div class="review-box">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span style="color: black;"><b>The stay in the hotel was
                                                    excellent</b></span>
                                        </div>
                                        <h6>by Cảnh Vũ, mar 26, 2022</h6>
                                        <p>Our stay at sea view was pleasant. We stayed here for a day and the view
                                            from
                                            the room was brilliant. Rooms were clean hygienic and big. foods were
                                            amazing. rooms were neat and clean.staff is very courteous and
                                            cooperative.great place to stay. Good atmosphere, Staff was
                                            amazing..well
                                            education..mannered. Room was spacious and cleaned more then an
                                            expected.
                                        </p>
                                    </div>
                                    <div style="margin-top: 15px; padding-top: 12px;" class="review-box">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span style="color: black;"><b>Awesome Stay..value for money</b></span>
                                        </div>
                                        <h6>by Minh Toàn, mar 27, 2022</h6>
                                        <p>We were there for 3 nights and hotel was too good. Greenery was flaunting
                                            everywhere. There were games kept for our
                                            entertainment. View from room was good. Hotel staff behavior was nice.
                                            They provided each and every service in hand.
                                            Overall stay was too good.
                                        </p>
                                    </div>
                                    <div style="margin-top: 15px; padding-top: 12px;" class="review-box">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span style="color: black;"><b>Best getaway destination with
                                                    family</b></span>
                                        </div>
                                        <h6>by Văn Ý, mar 28, 2022</h6>
                                        <p>The location, view from the rooms are just awesome. Very cool landscaping
                                            has been done Around the hotel. There are
                                            small activities that you can indulge with your family. Pool wasn't
                                            functional at the time of our stay. In all, the stay
                                            is really peaceful, calm and Silent. A place we would definitely want to
                                            visit again.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-pol" role="tabpanel"
                                    aria-labelledby="pills-pol-tab">
                                    <p>Check-in: 2.00 PM, Check-out: 12.00 PM</p>
                                    <p>The primary guest must be at least 18 years of age to check into this hotel.
                                    </p>
                                    <p>It is mandatory for guests to present valid photo identification at the time
                                        of
                                        check-in. According to government regulations, a valid Photo ID has to be
                                        carried by every person above the age of 18 staying at the hotel.
                                        The identification proofs accepted are Aadhar Card, Driving License, Voter
                                        ID
                                        Card, and Passport. Without Original copy of valid ID the guest will not be
                                        allowed to check-in.
                                    </p>
                                    <p>Local ID proof & Pan card will not be acceptable as ID proof.</p>
                                    <p>Unless mentioned, the tariff does not include charges for optional room
                                        services
                                        (such as telephone calls, room service, mini bar, snacks, laundry extra bed
                                        etc.). In case, such additional charges are levied by the
                                        hotel(s), we shall not be held responsible for it.</p>
                                    <p>Personal food and beverages are strictly not permitted on the hotel premises.
                                    </p>
                                    <p>The hotel shall not be responsible for any loss of or damage to your personal
                                        belongings.In case any damage is done to the hotel property by guests during
                                        their stay, it will be the sole accountability of the guest.</p>
                                    <p>No charge for children below 6 years and the extra cost will be applicable
                                        for
                                        availing an extra bed in a double occupancy room. </p>
                                    <p>Should any action by a guest be deemed inappropriate by the hotel, or if any
                                        inappropriate behaviour is brought to the attention of the hotel, the hotel
                                        reserves the right, after the allegations have been investigated,
                                        to take action against the guest.</p>
                                    <p>We would love to host you but in case your plans change, our simple
                                        cancellation
                                        process makes sure you receive a quick confirmation and fast refunds. Our
                                        standard check-in time is 12 noon and you can check-in any time
                                        after that till your reservation is valid.</p>
                                    <p>Pets are not allowed in the hotel premises.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <h3>Map</h3>
            <iframe class="mt-3"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873377.681956107!2d104.6784845101132!3d18.547177509472213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa5504cf4f8d%3A0x38355eb7fe4e696d!2sInterContinental%20H%C3%A0%20N%E1%BB%99i%20Westlake!5e0!3m2!1svi!2s!4v1648688017576!5m2!1svi!2s"
                width="1280" height="470" style="border:0;" id="maps" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
