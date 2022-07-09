<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
                        <h1 class="fw-light">Hotels Booking</h1>
                        <a style="color: white; text-decoration-line: none;" href="/">Home</a><span>>></span> <a
                            style="color: white; text-decoration-line: none;" href="/booking"> Booking</a>
                        <span>>></span> <a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi"> Hotels In Ha Noi</a>
                        <span>>></span><a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi/detail"> Hotels Detail</a>
                        <span>>></span><a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi/detail"> Hotel Booking</a>
                        <span>>></span> Confirm And Pay
                    </div>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div style="font-size: 40px;text-align: center;" class="alert alert-light" role="alert">
                    Confirm Your Book
                </div>
            </div>
            <div class="col-md-8">
                <h2><b>Your Tour</b></h2>
                <form class="row mb-md-80">
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="form-label">Check In</span>
                            <div class="check-in"><input id="dp1" type="date" required
                                    class="form-control clickable input-md" placeholder="Check-in date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="form-label">Check Out</span>
                            <div class="check-in"><input id="dp1" type="date" required
                                    class="form-control clickable input-md" placeholder="Check-out date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="form-label">Traveller</span>
                            <div aria-required="true" class="select-wrap one-third">
                                <select name="" id="" class="form-control">
                                    <option value="">Guest</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3+</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h2><b>Credit Card</b></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Card Type</label>
                                    <div class="group-form">
                                        <select name="cardtype" class="form-control">
                                            <option value="Select Card">Select Card</option>
                                            <option value="Visa">Visa</option>
                                            <option value="Master Card">Master Card</option>
                                            <option value="Credit Card">Credit Card</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Card Number</label>
                                    <input type="email" placeholder="Card Number" required class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- <button type="button" class="btn btn-outline-primary btn-rounded"
                            data-mdb-ripple-color="dark">Confirm and reserve</button> --}}
                        <a href="#!">
                            <button type="button" class="btn btn-info">Confirm and reserve</button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top"
                                alt="Fissure in Sandstone" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="name">
                                            <b>Hotel InterContinental</b>
                                            <p class="card-text"><small>Hà Nội</small></p>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="feedback">
                                            <div class="text-warning">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-dark"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="review"><small>262 reviews</small></span>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5>Type Room</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <img src="https://pix8.agoda.net/hotelImages/90776/1271004/0d6fccdcab784194ed9c3ecb6f69585b.jpg?ca=20&ce=0"
                                                    class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask"
                                                        style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">2 Twin Beds Classic Lake View</h5>
                                                <p class="card-text">
                                                    <i class="fa-solid fa-person-shelter"></i> Diện tích phòng: 43
                                                    m²<br>
                                                    <i class="fa-solid fa-location-arrow"></i> Hướng phòng: Hồ<br>
                                                    <i class="fa-solid fa-bed"></i> 2 giường đơn
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="review_box">
                                            <div class="title-top">
                                                <h5>Booking Summery</h5>
                                            </div>
                                            <div class="flight_detail">
                                                <div class="summery_box">
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>Pay</td>
                                                                <td>$245</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Taxes</td>
                                                                <td>$15</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="grand_total">
                                                        <h5><b>Grand Total: </b><span>$260</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
