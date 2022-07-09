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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @toastr_css
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
                        <h1 class="fw-light text-white">HOTELS BOOKING</h1>
                        <a style="color: white; text-decoration-line: none;" href="/">Home</a><span>>></span> <a
                            style="color: white; text-decoration-line: none;" href="/booking">Booking</a>
                        <span>>></span> <a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi">Hotels In Ha Noi</a>
                        <span>>></span><a style="color: white; text-decoration-line: none;"
                            href="/booking/hotel-ha-noi/detail">Hotels Detail</a>
                        <span>>></span> Hotel Booking
                    </div>
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

                    <input type="text" hidden id="id_khach_hang"
                        value="{{ !empty(Auth::guard('client')->user()) ? Auth::guard('client')->user()->id : (!empty(Auth::check()) ? Auth::user()->id : '') }}">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">First Name</label>
                            <input type="text" id="ho_lot"
                                value="{{ !empty(Auth::guard('client')->user()) ? $data->first_name : (!empty(Auth::check()) ? Auth::user()->first_name : '') }} "
                                placeholder="First Name" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Last Name</label>
                            <input type="text" id="ten"
                                value="{{ !empty(Auth::guard('client')->user()) ? $data->last_name : (!empty(Auth::check()) ? Auth::user()->last_name : '') }}"
                                placeholder="Last Name" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Email Id</label>
                            <input type="email" id="email"
                                value="{{ !empty(Auth::guard('client')->user()) ? $data->email : (!empty(Auth::check()) ? Auth::user()->email : '') }}"
                                placeholder="Email Id" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" id="so_dien_thoai"
                                value="{{ !empty(Auth::guard('client')->user()) ? $data->phone : (!empty(Auth::check()) ? Auth::user()->phone : '') }}"
                                placeholder="Phone No." required class="form-control">
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
                        <h5>Your Booking Information</h5>
                    </div>
                    <div class="col-12">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">From</label>
                                    <input id="ngay_bat_dau" type="date" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">To</label>
                                    <input id="ngay_ket_thuc" type="date" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Payment type</label>
                                    <div class="group-form">
                                        <select id="loai_thanh_toan" name="cardtype" class="form-control">
                                            <option value="1">VN Pay</option>
                                            <option value="2">Cash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Unit Prices</label>
                                    <input id="don_gia" type="number" disabled class="form-control" value="245">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Total Prices</label>
                                    <input id="thanh_tien" type="number" disabled class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
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
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Billing Zip Code</label>
                                    <input type="text" required class="form-control">
                                </div>
                            </div> --}}
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

                        {{-- <a href="/booking/hotel-ha-noi/detail/view-booking/confirm"> --}}
                        <button id="createBooking" type="button" class="btn btn-outline-info btn-rounded"
                            data-mdb-ripple-color="dark">CONFIRM BOOKING</button>
                        {{-- </a> --}}
                    </div>
                </form>
                <form class="mt-3" action="{{ url('/vnpay_payment') }}" method="POST">
                    @csrf
                    <input type="number" id="total_checkout" name="total" hidden>
                    <button class="btn btn-info check_out" name="redirect" hidden id="VNPay" type="submit">Thanh Toán
                        VNPay</button>
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
                                    <div class="col-9">
                                        <span class="name">
                                            <b>Hotel InterContinental</b>
                                            <p class="card-text"><small>Hà Nội</small></p>
                                        </span>
                                    </div>
                                    <div class="col-3">
                                        <span class="price">
                                            <small>FROM</small>
                                            <p style="color: blue;">$245</p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="google-map" style="position: relative; overflow: hidden; margin-top: 20px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196644.7715126714!2d105.86616713400265!3d20.994140661779323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa5504cf4f8d%3A0x38355eb7fe4e696d!2sInterContinental%20H%C3%A0%20N%E1%BB%99i%20Westlake!5e0!3m2!1svi!2s!4v1648210544208!5m2!1svi!2s"
                width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    @jquery
    @toastr_js
    @toastr_render
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#createBooking").click(function() {
                var payLoad = {
                    'ngay_bat_dau': $("#ngay_bat_dau").val(),
                    'ngay_ket_thuc': $("#ngay_ket_thuc").val(),
                    'loai_thanh_toan': $("#loai_thanh_toan").val(),
                    'id_khach_hang': $('#id_khach_hang').val(),
                    'don_gia': $('#don_gia').val(),
                    'thanh_tien': $('#thanh_tien').val(),
                };
                $.ajax({
                    url: '/booking/detail',
                    type: 'post',
                    data: payLoad,
                    success: function(res) {
                        if (res.status) {
                            toastr.success("Booking success");
                            if ($("#loai_thanh_toan").val() == 2) {

                                window.location.href = "/";
                            } else {
                                $("#VNPay").click();
                            }

                        }
                    },
                    error: function(res) {
                        var danh_sach_loi = res.responseJSON.errors;
                        $.each(danh_sach_loi, function(key, value) {
                            toastr.error(value[0]);
                        });
                    }
                });
            });
            $("#ngay_ket_thuc").change(function() {
                const date1 = new Date($("#ngay_bat_dau").val()),
                    date2 = new Date($("#ngay_ket_thuc").val()),
                    day = difference(date1, date2)
                if (day > 0) {
                    var total = day * $("#don_gia").val();
                    $("#thanh_tien").val(total);
                    $("#total_checkout").val(total);
                } else {
                    $("#thanh_tien").val('');
                    $("#total_checkout").val('');
                }

            });
            $("#ngay_bat_dau").change(function() {
                const date1 = new Date($("#ngay_bat_dau").val()),
                    date2 = new Date($("#ngay_ket_thuc").val()),
                    day = difference(date1, date2)
                if (day > 0) {
                    var total = day * $("#don_gia").val();
                    $("#thanh_tien").val(total);
                    $("#total_checkout").val(total);
                } else {
                    $("#thanh_tien").val('');
                    $("#total_checkout").val('');

                }

            });

            function difference(date1, date2) {
                const date1utc = Date.UTC(date1.getFullYear(), date1.getMonth(), date1.getDate());
                const date2utc = Date.UTC(date2.getFullYear(), date2.getMonth(), date2.getDate());
                day = 1000 * 60 * 60 * 24;
                return (date2utc - date1utc) / day
            }

        });
    </script>
</body>

</html>
