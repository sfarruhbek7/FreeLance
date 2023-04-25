<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("Private/assets/img/apple-icon.png")}}>
    <link rel="icon" type="image/png" href={{asset("Private/assets/img/favicon.png")}}>
    <title>
        Register
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    {{--    <!-- CSS Files -->--}}
    <link id="pagestyle" href={{asset("Private/assets/css/material-dashboard.css?v=3.0.4")}} rel="stylesheet" />
</head>
<style>
    .mess{
        color: red;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
</style>
<body class="bg-gray-200">
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom w-100">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Qo`shimcha ma`lumotlar</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('RegisterStage.store') }}" method="POST" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Date Birthday</label>
                                    <input id="date_birthday" type="date" class="form-control" required name="date_birthday">
                                </div>
                                <div class="input-group input-group-outline my-3 dropdown">
                                    <label id="labgen" class="form-label">Gender</label>
                                    <input id="gender" onclick="gensel()" type="button" style="width: 100%" class="form-control">
                                    <input id="gender2" style="display: none" required name="gender">
                                    <div id="genwin" class="dropdown-content">
                                        <a onclick="selectinput('Male')">Male</a>
                                        <a onclick="selectinput('Female')">Female</a>
                                        <a onclick="selectinput('Ko`rsatilmagan')">Ko`rsatilmagan</a>
                                    </div>
                                    <input id="genbool" style="display: none" value="false">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Country</label>
                                    <input id="last_name" type="text" class="form-control" required name="country">
                                </div>
                                <label id="mess" class="mess"></label>
                                <div class="d-flex">
                                    <div align="end" class="w-100">
                                        <button type="submit" class="btn bg-gradient-primary w-40 my-4 mb-2">Save</button>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    O`tkazib yuborish!
                                    <a href="?skip=true" class="text-primary text-gradient font-weight-bold">Skip</a>
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
{{--<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->--}}
<script src={{asset("Private/assets/js/1material-dashboard.min.js?v=3.0.4")}}></script>
<script src={{asset("underscore-min.js")}}></script>

<script>
    function gensel()
    {
        if(document.getElementById('genbool').value=='false')
        {
            document.getElementById('genwin').style="display: block";
            document.getElementById('genbool').value='true';
        }
        else
        {
            document.getElementById('genwin').style="display: none";
            document.getElementById('genbool').value='false';
        }
    }
    var inval="";
    function selectinput(inval)
    {
        document.getElementById('gender').value=inval;
        document.getElementById('gender2').value=inval;
        document.getElementById('genwin').style="display: none";
        document.getElementById('genbool').value='false';
        document.getElementById('labgen').innerHTML="";
    }
</script>
</body>

</html>
