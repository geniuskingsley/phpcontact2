<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GENIUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awsome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body data-spy="scroll" data-target="navbarSupportedContent">

    <!--========================navbar =======================-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Genius</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#porfolio">Porfolio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Service</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="list-inline-item ">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white ">
                                <i class="fab fa-linkedin-in "></i>
                            </a>
                        </li>

                        <li class="list-inline-item ">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white ">
                                <i class="fab fa-twitter text-white "></i>
                            </a>
                        </li>

                        <li class="list-inline-item ">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 ">
                                <i class="fab fa-google-plus-g "></i>
                            </a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-success text-dark">Mail Me</button> -->
                </div>
            </div>
        </nav>



        <!--============ homeback ground ======================-->

        <div class="mid">
            <video autoplay muted loop>
                <source class="embed-responsive" src="video/backroundvideo.mp4" type="video/mp4">
            </video>

            <div class="hero text-center">
                <h2 class="text-light display-4 font-weight-bold">Welcome To Genius-Tech</h2>
                <p class="text-light mx-auto">This is Genius Online Service, where we render professional Software . Looking forward to working with clients all around the globe.</p>
                <a href="#" class="text-dark">Download Resume</a>
            </div>
        </div>

        <!--============ end of homeback ground ======================-->
    </header>
    <!--======================== end of navbar =======================-->


    <!--================about section =================-->
    <section class="about py-5" id="about">
        <div class="row align-items-center align-content-center container my-5 mx-auto ">
            <div class="text col-lg-6 col-md-6 col-12 pt-5 pb-5 mt-md-0">
                <h6>HI DEAR, I'M</h6>
                <h2>KINGSLEY OSIFO</h2>
                <p>This is Genius Online Service, where we render professional Software . Looking forward to working with clients all around the globe.
                </p>
                <a href="#" class="text-dark">Learn More</a>
            </div>

            <div class="image col-lg-6 col-md-6 col-12 text-center mt-5 md-0 order-md-first ">
                <img class="img-fluid rounded-circle mw-100 t" id="p-img" src="images/mainprofile.jpg" alt=" my profile image ">
            </div>
        </div>
    </section>
    <!--================ end of about section =================-->

    <!--=====================porfolio =================-->

    <section class="porfolio py-5" id="porfolio">

        <!--========= service title ======-->
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <h2 class="fw-bold mb-5">Porfolio</h2>
                    </div>
                </div>
            </div>

            <div class="row container align-items-center align-content-center justify-content-center pt-5 pb-5 mt-md-0 mx-auto">
                <!--========= about skrill ======-->
                <div class="col-md-6 mt-md-0 text-center order-md-first">
                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">HTML</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">CSS</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">BOOTSTRAP</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 text-center  ">
                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">JAVASCRIPT</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">PHP</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skrill-item mb-4">
                        <h3 class="fs-6">JAVA</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========= end of about skrill ======-->

    <!--===================== end of porfolio =================-->


    <!--  ==================== service section ====================-->

    <section class="service py-5" id="services">
        <!--========= service title ======-->
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <h2 class="fw-bold mb-5">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md6 col-lg-4 mt-4 md-0">
                    <div class="service-item shadow-sm p-4 rounded bg-white ">
                        <div class="icon my-1 text-success fs-1"><i class="fas fa-code"></i></div>
                        <h3 class="fw-bold fs-7 text-success">Web Development</h3>
                        <p class="text-muted mb-1">I create different type of Website you need.</p>
                    </div>
                </div>

                <div class="col-md6 col-lg-4 mt-4 md-0">
                    <div class="service-item shadow-sm p-4 rounded bg-white ">
                        <div class="icon my-1 text-success fs-1"><i class="fas fa-robot"></i></div>
                        <h3 class="fw-bold fs-7 text-success">Andriod Development</h3>
                        <p class="text-muted mb-1">I create different type of Andriod application you need.</p>
                    </div>
                </div>

                <div class="col-md6 col-lg-4 mt-4 md-0">
                    <div class="service-item shadow-sm p-4 rounded bg-white ">
                        <div class="icon my-1 text-success fs-1"><i class="fas fa-chalkboard-teacher"></i></div>
                        <h3 class="fw-bold fs-7 text-success">Tutoring</h3>
                        <p class="text-muted mb-1">Physical and online Tutoring.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--  ==================== end of service section ====================-->


    <!--==================contact form ==========-->

    <div class="hero container text-center mb-5">
        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="card mt-5">

                    <div class="card-titlt">

                        <h2 class="text-center py-2">Contact Me</h2>
                        <hr>


<?php
//for error message

$message = "";

if(isset($_GET['error'])){
    $message = "Please Fill All Fields";
    echo '<div class="alert alert-danger">'. $message .'</div>';
}

if (isset($_GET['success'])) {
    $message = "Your Message Has Been Sent";
    echo '<div class="alert alert-success">' . $message . '</div>';
}

?>


                    </div>

                    <div class="card-body">
                        <form action="SendMail.php" method="post">
                            <input type="text" name="fname" placeholder=" Please, Enter Your Full Name" class="form-control mb-2">
                            <input type="email" name="email" placeholder=" Please, Enter Your Email Address" class="form-control mb-2">
                            <input type="text" name="subject" placeholder=" Please, Enter Subject" class="form-control mb-2">
                            <textarea name="message" class="form-control mb-2"placeholder=" Please, Enter Your Message"></textarea>
                            <button name="send" class="btn btn-success">Send</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!--==================end of contact form ==========-->




    <!-- ================= footer =================-->

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5 text-light ">

        <div style="background-color: #2a9172; " class="mt-5 ">
            <div class="container ">

                <!-- Grid row-->
                <div class="row py-3 d-flex align-items-center ">

                    <!-- Grid column -->
                    <div class="col-md-12 text-center # ">
                        <h6 class="mb-0 ">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->


                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 ">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text ">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 ">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold ">Company name</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; ">
                    <p>GENIUS TECH</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold ">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; ">
                    <p>
                        <i class="fas fa-home mr-3 "></i> Agbara, Lagos 10001, Nigeria
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3 "></i> geniuskingsley1@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3 "></i> +2347038238375
                    </p>


                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Social buttons -->
        <!-- <div class="text-center text-md-right ">
            <ul class="list-unstyled list-inline ">
                <li class="list-inline-item ">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1 ">
                        <i class="fab fa-facebook-f "></i>
                    </a>
                </li>
                <li class="list-inline-item ">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white ">
                        <i class="fab fa-twitter text-white "></i>
                    </a>
                </li>
                <li class="list-inline-item ">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1 ">
                        <i class="fab fa-google-plus-g "></i>
                    </a>
                </li>
                <li class="list-inline-item ">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white ">
                        <i class="fab fa-linkedin-in "></i>
                    </a>
                </li>
            </ul>
        </div> -->

        </div>
        <!-- Grid column -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-3 ">© 2021 Copyright:
            <a class="text-light text-decoration-none " href="https://mdbootstrap.com/ "> Genius-Tech.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- ================= end of footer =================-->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js " integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js " integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc " crossorigin="anonymous "></script>
</body>

</html>
