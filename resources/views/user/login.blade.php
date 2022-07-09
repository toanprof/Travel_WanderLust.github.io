<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Wanderlust</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @toastr_css
</head>

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0" style="width: 450px; height:520px;">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <h2 class="brand-text text-primary ">Wanderlust</h2>
                                </a>
                                <form class="auth-login-form mt-2">
                                    <div class="form-group">
                                        <label for="login-email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="login-email"
                                            placeholder="john@example.com" aria-describedby="login-email" tabindex="1"
                                            autofocus />
                                    </div>

                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label>
                                            {{-- <a href="page-auth-forgot-password-v1.html">
                                                <small>Forgot Password?</small>
                                            </a> --}}
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                name="login-password" tabindex="2"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="login-password" />
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer">
                                                    <i class="fa-solid fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="remember-me"
                                                tabindex="3" />
                                            <label class="custom-control-label" for="remember-me"> Remember Me </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" id="login" tabindex="4">Sign in</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="/user/register">
                                        <span>Create an account</span>
                                    </a>
                                </p>

                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="/user/login/google">
                                            <button class="btn-login-plus btn-google-login" id="btn-google-login-styled"
                                                style="width: 200px; padding: 0px 10px 0px 0px; border: none; color: rgb(255, 255, 255); font-weight: 500; border-radius: 5px;  margin-bottom: 8px; background-color: rgb(221, 75, 57);">
                                                <div class="pre-btn-login"
                                                    style="background-repeat: no-repeat; width: 40px; height: 40px; float: left; border-radius: 5px; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAAMKAAADCgGCv3mMAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAelQTFRF/////wAAzDMz1VUr6EYu20k930o12Uw53k4320043U063ks720w43Ek63k063kw43Us43kw63ks53ko43Ew43Es63Uo53Uo53Us53ks53Us43Us53Us53Uo43Uw63Us53kw53Ew53Us43Us63Uo53Uo53Uw53Uw53Us53Us43Us53Us63Us53Uo53Us63kw53Uw53Us53ks53Us53Us53Us53Us53Us53Us53Us53Us53Us53Us53Us53Uw63Uw73U073k483lA+3lFA3lNC31NC31RD31ZF31hH4FhI4FpJ4FtL4FxM4F1M4F1N4WJS4mNT4mZX4mdX42la42pb42tc421e5HFj5XNl5XRm5nhr5npt5ntu5nxv535x54Bz54J26IN26IN36IZ66Yt/6YyA6Y2B6o2C6o6D6pKH65OI65SK65eM7JmP7JyS7Z+V7aKZ7qOa7qWc7qad7qee7qef8K+m8K+n8LGq8bOr8bau8bav8rix8r2288G788K79MK89MS+9MbA9MfC9cnE9crF9s/K99XR+NjU+NrW+NrX+d3a+d7b+d/b+uTh+ubj+ufl++jm++nn++vp/O3s/O7s/O/t/PHv/fTz/ff2/vf2/vj3/vn5/vv6/vv7/vz8//39//7+////0I4vHAAAAD10Uk5TAAEFBgsVGBsuMjU9QEJGTVJUVVZXWFlaYmNpcH5/gIGKoqOkr7Kztru+wsPIyszO2Nzd3uDj5vL09ff9/v4lm+oAAAK9SURBVFjDvVdpVxMxFJ2RVhSVqohAi1IsILUoZS20jawKKi6474goqIOIqKi4gxs4LlRERRCdX+pk2tKXWTJLzvF+6n3JvT2ZJC/vcZwBXB6fPxAMRyLhYMDv87g4W3AXlkcRgWh5oduqepU3FEM6iO3yZlnR59UgQ9Ru4c3k66oQFbvX09dehkxRsdpYv6YeWUDDWiP9xiZkCc2bdOV8cRxZRHybzrfkS5ENlGodipEtbNesP27PIL5Z9f2bkE00E3vhrke20QDPQxlygJ3g/CJH2LBiUOXMYE96L/OQQ2xN3f8apwa1yfzg1Y50XRkURq52mzp4FYOQKto++HpJwvj78UEX3SCknAFV/ur9IGXw/QbVIIbzZBEZG/opEXjVTnMokg0qiMiwpMIYPT3J+Z/I35f+KKr5p/0nz/Q9XzLTo6iL80DeMafon+1P0kMvxsz2wcP5IL2j6AWj2ScEQThAhnycH9IE1k8Z/p0gj54mQ34uANhBrP9x2I5BgAsCdhkbTCA7BkEuDNgoNriZJk9WoIREUfwqD38SxZdAEuYigE1K4C/EzFmYwTxDRSCJEAZTePiY1kCkGcAl3MfD/QYGRkuAH3EAz76bJoKCd3LoLe0jwm3sxQbTLXDC3s/gPuhuIzxILQvY4Tac0IcjF2gHiTjKj/D0haOZwJF5ObDcSTvKxGXq+YUdEufT/Ows5o+pl4m8zreSuWy8B5Pu0WXMZvdRr7MqoUykdm7uzWQi9fMiPaGoUlrruCoj/R42S2nqpHrtG9R/OWeaVDVpvWNkejGpXnx/vc08res9LG2nhh7eGzjeau1hcf601WUxPq4FjM97Nc9YYOQyljiVjEVWYzZbmRfNYSs0UT5jqVvCWGzv4JnKfVTCMzUc0Xy2lqcxh63pqsxmavuqc5kaz7oC/j+0vuzNt732/x+k+ISHLlgFkwAAAABJRU5ErkJggg==&quot;); background-color: rgb(221, 75, 57); background-size: 40px 40px; background-position-x: 3px;">
                                                </div>
                                                <div class="label-btn-login" style=" line-height: 40px;">Đăng nhập
                                                    Google</div>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/user/login/facebook">
                                            <button class="btn-login-plus btn-facebook-login"
                                                id="btn-facebook-login-styled"
                                                style="width: 200px; padding: 0px 10px 0px 0px; border: none; color: rgb(255, 255, 255); font-weight: 500; border-radius: 5px;  margin-bottom: 8px; background-color: rgb(59, 89, 152);">
                                                <div class="pre-btn-login"
                                                    style="background-repeat: no-repeat; width: 40px; height: 40px; float: left; border-radius: 5px; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAAflAAAH5QFPDbM3AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAPZQTFRF////VVWqM02ZQFWVOVWXOlqUPFmZPFuXO1iWPFiXO1mZO1iYO1mZO1iYO1mYO1qZO1mYO1iYO1qXO1mYOlmXO1mYO1mYO1mYO1mZO1mXO1mYO1mYO1mYO1mYO1mYPVqZQ2CcRGGdRWGdSmWgTWihTWmiUGujUWujWnOoXXaqZX2uZ36va4KxbIOyeIy4eI24eo65f5K8hZe/iZvBipzCjJ3CjJ7DkKHEkaLFlKXHlaXHmqrKnazLn67No7HPpLLPp7TRqbbSqrfTq7jTrbnUrrrUrrvVucTaztXl0djn1dzp2uDs2+Ds3+Tu8/X5+/z9/Pz9////575kmQAAAB50Uk5TAAMKDBsfPExOYmRocHSKjqSwtr7Ay9XY5ery+Pn+bfME6gAAAflJREFUWMOtl9d2wjAMhk1ZIWRBEkYAd1K66N4bWjrpyPu/TIESDhApVo75L2P0HSxrMoYoqWiGZZc9r2xbhqYkWSyl8sUan1GtmE9RrZd0t8EBNVx9iWCeUCscVUVNiOyzJR6pUjbSPO1woZw0bp+pcoKqGcw+V+ck1XOw90xOlgn4MlHgMVQIE0weS2bo/jym5vyQwfy3fXLbe+k9P3Wv5z058xZp5P32vvxA/dBrTscDEj/nvz4O4M5U/ML29/6UPsPnk6hOwPG/+TMN6AN5EbylCv+BR18A4Oo4/5H8/RYCKv/1QYftNya2H91Op3MF/UYfAVwYsBvYv+PR5I7qXwM+3A8AZzigMayTeeTwIAAcRQR0fgAoygCKg/pfkwHUkkyBvq80m83jAHDaHGodJihMgz5f+iG9wQCNGUTAKwwwmEUEPMAAi9lEwAUMsFmZCDiEAWXmEQE7MMAjA1oYALxCq91u3wSmd+2hlrEr2FwmEgdOtOQAFhxIdIABhzIdoMHJRAco8uksXVDkSxpWVCmAUVHFyjoF4EY1FgpAj2ptBMC4tSHNlQBQI9u7GDBp7/CAIQZko0ccIcARDFkiwMyQBY15AkA9Ixo0BYCccNSNBpjiYXt1a6w12rAtPe7LLxwLWHnkly75tW8Bi6f86ruA5Tve+v8H8zzT+VH/LzgAAAAASUVORK5CYII=&quot;); background-color: rgb(59, 89, 152); background-position: 5px 4px; background-size: 30px 30px;">
                                                </div>
                                                <div class="label-btn-login" style=" line-height: 40px;">Đăng nhập
                                                    Facebook</div>
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            $('#login').click(function(e) {
                e.preventDefault();
                payLoad = {
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                };
                $.ajax({
                    url: '/user/login',
                    type: 'post',
                    data: payLoad,
                    success: function(res) {
                        if (res.status == 2) {
                            toastr.success("Đăng nhập thành công!");
                            window.location.replace("/");

                        } else if (res.status == 1) {
                            toastr.warning("Bạn cần phải kích hoạt email");
                        } else {
                            toastr.error("Đăng nhập thất bại!");
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
        });
    </script>
</body>

</html>
