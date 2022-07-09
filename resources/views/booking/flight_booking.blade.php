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
                        background-image: url('https://themes.pixelstrap.com/rica/assets/images/flights/flight-breadcrumb2.jpg');
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
        " class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="fw-light">Flights Booking</h1>
                    <a style="color: black; text-decoration-line: none;" href="/">Home</a><span>>></span> <a
                        style="color: black; text-decoration-line: none;" href="/booking">Booking</a>
                    <span>>></span> Flights Booking
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h5>Your Personal Information</h5>
                <form class="row mb-md-80">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">First Name</label>
                            <input type="text" placeholder="First Name" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Last Name</label>
                            <input type="text" placeholder="Last Name" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Email Id</label>
                            <input type="email" placeholder="Email Id" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" placeholder="Phone No." required class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I want to receive promotional offers in
                                the future</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12">
                        <h5>Your Card Information</h5>
                    </div>
                    <div class="col-12">
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
                                    <label class="font-weight-bold">Card Holder Name</label>
                                    <input type="text" placeholder="Card Holder Name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Card Number</label>
                                    <input type="email" placeholder="Card Number" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Card Identification Number</label>
                                    <input type="text" placeholder="Card Identification Number" required
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Expiration Month</label>
                                            <div class="group-form">
                                                <select name="expmonth" class="custom-select form-control">
                                                    <option selected>Month</option>
                                                    <option value="Jan">Jan</option>
                                                    <option value="Feb">Feb</option>
                                                    <option value="Mar">Mar</option>
                                                    <option value="Apr">Apr</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="Aug">Aug</option>
                                                    <option value="Sep">Sep</option>
                                                    <option value="Oct">Oct</option>
                                                    <option value="Nov">Nov</option>
                                                    <option value="Dec">Dec</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Expiration Year</label>
                                            <div class="group-form">
                                                <select name="expyear" class="custom-select form-control">
                                                    <option selected>Year</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2026</option>
                                                    <option value="2026">2027</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Billing Zip Code</label>
                                    <input type="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-0">
                        <div class="form-group">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="#">
                                <span class="checkmark"></span>By continuing, you agree to the
                                <a href="#">Terms and Conditions.</a>
                            </label>
                        </div>
                        <a href="#!">
                            <button type="button" class="btn btn-info">Confirm and Pay</button>
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
                                    <div class="col-2">
                                        <i class="fa-solid fa-plane"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="name">
                                            <b>Đà Nẵng to Hà Nội</b>
                                            <p class="card-text">one way ticket</p>
                                        </span>
                                    </div>
                                    <div class="col-3">
                                        <span class="price">
                                            <small>FROM</small>
                                            <p style="color: blue;">$55</p>
                                        </span>
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
