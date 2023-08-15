<!DOCTYPE html>
<html lang="en">
    <style>
        .text-white {
    color: white;
}
        .purple-bg {
    background-color:#84448C;
}
        .custom-heading {
            margin-top: 0;
            margin-bottom: .5rem;
            font-family: "Montserrat","Poppins",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-weight: 700;
            line-height: 1.2;
            color: #2a3855;
        }
        .rectangle {
            height: 100px;
            background-color: #84448C;
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .button {
            padding: 10px 20px;
            background-color: #FF0000;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

    </style>
<head>
    <meta charset="utf-8">
    <title>GrowMark - Digital Marketing HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @if(session('done'))
    <div class="alert alert-success">
        {{ session('done') }}
    </div>
@endif
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid" style="background: #84448C;">
        <div class="container py-3">

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <div class="d-flex align-items-center">
                    <a href="index.html" class="ms-lg-4">
                        <img src="img/icon/logo-1.png" alt="logo" class="img-fluid">
                    </a>
                </div>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">Dashboard</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Join Now

                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">find your dream job in libyan today</h1>
                                    <a href=""
                                        class="btn btn-warning rounded-pill py-3 px-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                        Business</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="row justify-content-center text-center">
        <div class="col-10 col-md-6">
            <h3 class="custom-heading">Welcome to the libyana HR</h3>
          <p class="px-lg-4 mt-3">Now you can apply to join the libyana team anywhere in the world!</p>
          <hr class="short" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 40.2087rem; opacity: 1;">
        </div>
      </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h5 class="custom-heading">High Salary</h5>
                        <p class="mb-0">Solution for every business related problems, readily and skillfully.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                        </div>
                        <h5 class="custom-heading">Amazing Benefits</h5>
                        <p class="mb-0">Calculate every possible risk in your business, take
                            control over them.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h5 class="custom-heading">Friendly Team</h5>
                        <p class="mb-0">Know the market before taking any step, reduce
                            risks before you go.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h5 class="custom-heading">Organized Work</h5>
                        <p class="mb-0">Experience unparalleled service, from beginning
                            to final construction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 400px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/jlWMTNZNOc0" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="rectangle">
        <p class="mb-0">Know the market before taking any step, reduce
            risks before you go.</p>


    </div>
    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->







    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp  purple-bg data-wow-delay=0.5s " data-wow-delay="0.1s">

                    <br>  <br>

                    <div class="d-inline-block align-items-center rounded overflow-hidden border border-white p-4" >
                        <h3 class="text-white">Join Now</h3>
                        <h6 class="text-white">Please fill the form in order to apply to join </h6>

                        <h6 class="text-white">the Libyana team and reach unexpected goals  </h6>
                        <h6 class="text-white">  in your career.
                            our team will reach out to you shortly after.</h6>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp purple-bg data-wow-delay=0.5s">
                    <h6 class="mb-4 text-white">Please fill the following information:</h6>
                    <form action="{{route('requests.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                <label for="name">full Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="+218 92-XXX XXX XX">
                                <label for="phone">+218 92-XXX XXX XX</label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality ">
                                <label for="mail">Nationality</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="birth" id="birth" placeholder="Date of Birth ">
                                <label for="mobile">Date of Birth </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="city" class="form-control" id="city" placeholder="City ">
                                <label for="city">City</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input class="form-control" name="martial_status" placeholder="Martial Status" id="martial_status">
                                <label for="Martial Status">Martial Status</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input class="form-control" name="address" placeholder="Address" id="address">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <textarea class="form-control" name="about" placeholder="Tell us about your self " id="about"
                                    style="height: 130px"></textarea>
                                <label for="about">Tell us about your self </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="file" class="form-control" name="cv" id="cv" style="height: 130px;">
                                <label for="cv">Attach CV</label>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-light w-100 py-3" type="submit">Submit</button>
                            <br> <br>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->









    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
