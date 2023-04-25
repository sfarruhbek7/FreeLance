<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("Private/assets/img/apple-icon.png")}}>
    <link rel="icon" type="image/png" href={{asset("Private/assets/img/favicon.png")}}>
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href={{asset("Private/assets/css/nucleo-icons.css")}} rel="stylesheet" />
    <link href={{asset("Private/assets/css/nucleo-svg.css")}} rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src={{asset("Private/42d5adcbca.js")}} crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href={{asset("Private/assets/css/material-dashboard.css?v=3.0.4")}} rel="stylesheet" />
</head>

<body class="bg-gray-200">
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('login') }}" method="POST" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required name="email">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" required name="password" autocomplete="current-password">
                                </div>
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="{{ __('Log in') }}">
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="/register" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
{{--            <div class="container">--}}
{{--                <div class="row align-items-center justify-content-lg-between">--}}
{{--                    <div class="col-12 col-md-6 my-auto">--}}
{{--                        <div class="copyright text-center text-sm text-white text-lg-start">--}}
{{--                            © <script>--}}
{{--                                document.write(new Date().getFullYear())--}}
{{--                            </script>,--}}
{{--                            made with <i class="fa fa-heart" aria-hidden="true"></i> by--}}
{{--                            <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>--}}
{{--                            for a better web.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6">--}}
{{--                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src={{asset("Private/assets/js/core/popper.min.js")}}></script>
<script src={{asset("Private/assets/js/core/bootstrap.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/perfect-scrollbar.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/smooth-scrollbar.min.js")}}></script>
<!-- Github buttons -->
<script async defer src={{asset("Private/buttons.js")}}></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{asset("Private/assets/js/material-dashboard.min.js?v=3.0.4")}}></script>
</body>

</html>



