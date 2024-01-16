<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UzFreeLance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="Public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Public/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Public/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background: none">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>FreeLance</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
            </div>
            <a href="/login" class="btn btn-primary py-2 px-4 ms-3">LogIn</a>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="Public/img/home-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">IJOD VA INNOVATSIA</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Ijodiy va innovatsion raqamli yechim</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="Public/img/home-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">MABLAG` VA RIVOJLANISH</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Biz bilan birga muammolaringizga yechim toping</h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Foydalanuvchilar soni</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">4</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Projects Done</h5>
                        <h1 class="mb-0" data-toggle="counter-up">15435</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Win Awards</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">8564</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Biz bilan quyidagi sohalar ustida ishlashingiz mumkin</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3">IT</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                            </svg></i>
                    </div>
                    <h4 class="mb-3">Ijtimoiy-Gumanitar</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-percent text-white"></i>
                    </div>
                    <h4 class="mb-3">Aniq Fanlar</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-central-south-asia" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z"/>
                            </svg></i>
                    </div>
                    <h4 class="mb-3">Tabiiy Fanlar</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg></i>
                    </div>
                    <h4 class="mb-3">Filologiya</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Jamoa a'zolari</h5>
            <h1 class="mb-0"></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
{{--                        <img class="img-fluid w-100" src="Public/img/team-1.jpg" alt="">--}}
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Saidmurotov Sulaymon</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        {{--                        <img class="img-fluid w-100" src="Public/img/team-3.jpg" alt="">--}}
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Satimbayev Farruhbek</h4>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">--}}
{{--                <div class="team-item bg-light rounded overflow-hidden">--}}
{{--                    <div class="team-img position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid w-100" src="Public/img/team-2.jpg" alt="">--}}
{{--                        <div class="team-social">--}}
{{--                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>--}}
{{--                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>--}}
{{--                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>--}}
{{--                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center py-4">--}}
{{--                        <h4 class="text-primary">Satimbayev Farruhbek</h4>--}}
{{--                        <p class="text-uppercase m-0"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
{{--                        <img class="img-fluid w-100" src="Public/img/team-3.jpg" alt="">--}}
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Matnazarov Sardor</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Vendor Start -->
{{--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--    <div class="container py-5 mb-5">--}}
{{--        <div class="bg-white">--}}
{{--            <div class="owl-carousel vendor-carousel">--}}
{{--                <img src="Public/img/vendor-1.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-2.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-3.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-4.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-5.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-6.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-7.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-8.jpg" alt="">--}}
{{--                <img src="Public/img/vendor-9.jpg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Vendor End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Bog`lanish</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Xorazm viloyatidagi TATU Urganch filiali</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">saidmurotov.sulaymon@mail.ru</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+99886016030</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <!--                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">-->
                    <!--                            <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
                    <!--                                <h3 class="text-light mb-0">Quick Links</h3>-->
                    <!--                            </div>-->
                    <!--                            <div class="link-animated d-flex flex-column justify-content-start">-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>-->
                    <!--                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">-->
                    <!--                            <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
                    <!--                                <h3 class="text-light mb-0">Popular Links</h3>-->
                    <!--                            </div>-->
                    <!--                            <div class="link-animated d-flex flex-column justify-content-start">-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>-->
                    <!--                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>-->
                    <!--                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Public/lib/wow/wow.min.js"></script>
<script src="Public/lib/easing/easing.min.js"></script>
<script src="Public/lib/waypoints/waypoints.min.js"></script>
<script src="Public/lib/counterup/counterup.min.js"></script>
<script src="Public/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="Public/js/main.js"></script>
</body>

</html>
