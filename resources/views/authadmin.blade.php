<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Unib Mobile for Parents | Login Administrator</title>
    <meta name="description" content="Unib Mobile for Parets">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="{{ asset('assets/backend/css/demo1/pages/general/login/login-4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/animate.css/animate.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/backend/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo_unib.png') }}" />
</head>

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url({{ asset('assets/backend/media/bg/bg-2.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <img style="width:200px;" src="{{ asset('assets/logo/logo_unib.png') }}">
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Admin Unib Mobile for Parents</h3>
                            </div>
                            @if ($message = Session::get('error'))
                            <div class="kt-alert kt-alert--outline alert alert-danger alert-dismissible bounceIn"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i
                                        class="la la-close"></i></button>
                                <span><strong>Perhatian:</strong> <i>{{ $message }}</i></span>
                            </div>
                            @endif
                            <form method="post" class="kt-form" action="{{ route('login.admin.action') }}">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Username" name="username"
                                        required>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="row kt-login__extra">

                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign
                                        In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>
    <script src="{{ asset('assets/backend/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/vendors/general/moment/min/moment.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/jquery-form/dist/jquery.form.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/custom/js/vendors/bootstrap-notify.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/jquery-validation/dist/jquery.validate.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/custom/js/vendors/jquery-validation.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/backend/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/backend/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>
</body>

</html>