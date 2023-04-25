<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("Private/assets/img/apple-icon.png")}}>
    <link rel="icon" type="image/png" href={{asset("Private/assets/img/favicon.png")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Buyurtma berish
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
    <!--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->
    <link href={{asset("Private/style.css")}} rel="stylesheet" />
    <script src={{asset("Private/script1.js")}}></script>
    <script src={{asset("Private/script2.js")}}></script>
</head>

<body class="g-sidenav-show  bg-gray-200" role="document">
<style id="styleselect2">
</style>
<style>
    .back-un {
        background-color: unset;
        color: white;
    }
    input{
        border-radius: 10px;
    }
    .input-title{
        font-size: 25px;
        font-family: "Monotype Corsiva";
    }
    textarea{
        border-radius: 10px;
        height: 300px;
        font-family: "Times New Roman"
    }
</style>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src={{asset("Private/assets/img/logo-ct.png")}} class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Profile</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Shaxsiy Statistikalar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="billing">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="receive">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 2 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                            </svg></i>
                    </div>
                    <span class="nav-link-text ms-1">Buyurtma olish</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="send">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 2 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg></i>
                    </div>
                    <span class="nav-link-text ms-1">Buyurtma berish</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="messenger">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-chat-text" viewBox="0 2 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </i>
                    </div>
                    <span class="nav-link-text ms-1">Messenger</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="profile">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" style="color: white;" viewBox="0 2 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Profile</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center m-2">
                        <a class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{$user->first_name." ".$user->last_name}}</span>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button style="color: red" class="dropdown-item" href="{{ __('Log Out') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp
                            </button>
                        </form>
                    </li>
                    {{--            <li class="nav-item px-3 d-flex align-items-center">--}}
                    {{--              <a href="javascript:;" class="nav-link text-body p-0">--}}
                    {{--                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>--}}
                    {{--              </a>--}}
                    {{--            </li>--}}
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        {{--              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">--}}
                        {{--                <i class="fa fa-bell cursor-pointer"></i>--}}
                        {{--              </a>--}}
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../Private/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../Private/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-5 mb-5" style="width: 800px">
                <form role="form" action="{{ route('History.store') }}" method="POST" class="text-start" enctype="multipart/form-data">
                    @csrf
                    <div class="card  mb-4 w-100">
                        <div class="card-header p-3 pt-2">
                            <div class="d-flex">
                                <select class="w-100" style="font-size: 50px" id="kasb" required name="directions">
                                    <option></option>
                                    @foreach($directions as $val)
                                    <option value="{{$val->id}}">{{$val->name}}({{$jobs[$val->job_id]->name}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                    <div class="col-sm-6 mb-1 w-100">
                        <div class="card w-100">
                            <div class="card-header p-3 pt-2">
                                <div class="d-flex mb-3">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label" style="font-size: 17px">*Buyurtma nomini kiriting...</label>
                                        <input type="text" class="form-control back-un input-title" required name="order_name">
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <textarea id="inputtextarea" class="w-100 back-un" placeholder="Buyurtma haqida..." name="more"></textarea>
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">*Buyurtma narxi(so`m)...</label>
                                    <input type="text" class="form-control" required name="price">
                                </div>
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Tugallanish vaqti...</label>
                                    <input type="date" class="form-control" name="completion_date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <div class="card-header p-0 pt-3">
                            <div class="d-flex">
                                <div class="w-5"></div>
                                <div class="w-70"><button onclick="btnfile()" type="button" class="btn btn-warning">Namuna uchun fayl Biriktirish</button>
                                    <input id="biriktirish" type="file" style="display: none" name="example">
                                </div>
                                <div align="end" class="w-20">
                                    <button class="btn btn-info" type="submit">Saqlash</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div >
            <div class="col-md-5" style="width: 450px">

                @foreach($histories as $val)
                <div class="col-sm-6 mb-xl-2 mb-4 w-100">
                    <div class="card w-100">
                        <div class="card-header p-3 pt-2">
                            <div align="center" class="d-flex">
                                <p class="w-100 h-25" style="font-size: 5px; color: black">
                                    <a style="font-size: 17px; color: black">{{$val->order_name}}</a><br><br>
                                    @if($val->worker_id==0)
                                        @if(!is_null($val->workers))
                                            <a style="font-size: 20px; color: blue">Holat: <?php echo count(json_decode($val->workers))?> ta ishchi!</a><br><br>
                                            <button type="submit" class="btn btn-success w-40" style="font-size: 15px">Tanlash</button>
                                        @else
                                            <a style="font-size: 20px; color: blue">Holat: 0 ta ishchi!</a><br><br>
                                        @endif
                                        <button type="submit" class="btn btn-danger w-40" style="font-size: 15px">Bekor qilish</button>
                                    @elseif($val->worker_id!=0 && $val->status==0)
                                        <a style="font-size: 20px; color: blue">Holat: Kutilmoqda!</a><br><br>
                                        <button type="submit" class="btn btn-info w-40" style="font-size: 15px">Qabul qilish</button>
                                        <button type="submit" class="btn btn-danger w-40" style="font-size: 15px">Bekor qilish</button>
                                    @else
                                        <a style="font-size: 20px; color: blue">Holat: Tayyor!</a><br><br>
                                        <button type="submit" class="btn btn-warning w-40" style="font-size: 15px">Hisobot</button>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="container-fluid py-1">
        <div class="row">
        </div>
    </div>
    <div class="container-fluid py-1">
        <div class="row">
            <div class="col-sm-6 mb-xl-0 mb-1 w-75">

            </div>
        </div>
        <footer class="footer py-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-2 mb-lg-0 mb-4">
                    </div>
                    <div class="col-lg-7 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            Create by
                            <a href="" class="font-weight-bold" target="_blank">Unusual Team</a>
                        </div>
                    </div>
                    {{--          <div class="col-lg-6">--}}
                    {{--            <ul class="nav nav-footer justify-content-center justify-content-lg-end">--}}
                    {{--              <li class="nav-item">--}}
                    {{--                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>--}}
                    {{--              </li>--}}
                    {{--              <li class="nav-item">--}}
                    {{--                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>--}}
                    {{--              </li>--}}
                    {{--              <li class="nav-item">--}}
                    {{--                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>--}}
                    {{--              </li>--}}
                    {{--              <li class="nav-item">--}}
                    {{--                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>--}}
                    {{--              </li>--}}
                    {{--            </ul>--}}
                </div>
            </div>
        </footer>
    </div>
</main>
<div class="fixed-plugin">
{{--    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">--}}
{{--        <i class="material-icons py-2">settings</i>--}}
{{--    </a>--}}
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span id="primary" class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span id="dark" class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span id="info" class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span id="succes" class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span id="warning" class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span id="danger" class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button id="dark" class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
                <button id="transparent" class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                <button id="light" class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input style="display: none" class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="darklight" onclick="darklight()">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-info w-100" href="">Download the application</a>
            <!--            <a class="btn btn-outline-dark w-100" href="">View documentation</a>-->
            <div class="w-100 text-center">
                <h6 class="mt-3">Share to</h6>
                <a href="https://telegram.me/share/url?url=tg://openmessage?user_id=5797642638&message_id=443333" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-telegram" aria-hidden="true" style="font-size: 20px"></i>
                </a>
                <a href="https://www.instagram.com/?url=https://instagram.com/sfarruhbek_7" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-instagram" aria-hidden="true" style="font-size: 20px"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src={{asset("Private/assets/js/core/popper.min.js")}}></script>
<script src={{asset("Private/assets/js/core/bootstrap.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/perfect-scrollbar.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/smooth-scrollbar.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/chartjs.min.js")}}></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src={{asset("Private/buttons.js")}}></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{asset("Private/assets/js/material-dashboard.min.js?v=3.0.4")}}></script>
<script>
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.getElementById('dark-version').click();
    }
    document.getElementById('transparent').click();
    document.getElementById('info').click();
    function darklight()
    {
        document.getElementById('dark-version').click();
        if(document.getElementById('darklight').checked)
        {
            document.getElementById('styleselect2').innerHTML=".select2-dropdown{background-color: white} .select2-selection__rendered{color: black}";
            document.getElementById('inputtext').style="color: black";
            document.getElementById('inputtextarea').style="color: black";
        }
        else
        {
            document.getElementById('styleselect2').innerHTML=".select2-dropdown{background-color: lightslategray} .select2-selection__rendered{color: white}";
            document.getElementById('inputtext').style="color: white";
            document.getElementById('inputtextarea').style="color: white";
        }
        document.getElementById('transparent').click();
    }
</script>
<script>
    window.onpageshow = function() {
        $('#kasb').select2({
            allowClear: true,
            placeholder: '*Kasbni tanlang'
        });
        $('#yonalish').select2({
            allowClear: true,
            placeholder: 'Yo`nalishni tanlang'
        });
    };
</script>
<!--                        <script>-->
<!--                            var f;-->
<!--                            f=['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avgust','Sentabr','Oktabr','Noyabr','Dekabr'];-->
<!--                            function tekshirish(s,f)-->
<!--                            {-->
<!--                                let text=s;-->
<!--                                if (text.lastIndexOf(f) >=0)-->
<!--                                    return true;-->
<!--                                else return false;-->
<!--                            }-->
<!--                            function searchresult7()-->
<!--                            {-->
<!--                                var a,n;-->
<!--                                a=document.getElementById('search7').value;-->
<!--                                n=f.length;-->
<!--                                if(a.length>=3)-->
<!--                                {-->
<!--                                    var i;-->
<!--                                    var opt='';-->
<!--                                    for(i=0;i<n;i++)-->
<!--                                    {-->
<!--                                        if(tekshirish(f[i],a))-->
<!--                                        {-->
<!--                                            opt+='<option value="JAN">'+f[i]+'</option>';-->
<!--                                        }-->
<!--                                    }-->
<!--                                    $('#example').html(opt);-->
<!--                                }-->
<!--                            }-->
<!--                        </script>-->
<script>
    function btnfile()
    {
        document.getElementById("biriktirish").click();
    }
</script>
</body>

</html>
