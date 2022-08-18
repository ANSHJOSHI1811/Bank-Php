<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- font awesome ICON -->
    <script src="https://kit.fontawesome.com/1367876d04.js" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Bootstrap JS  -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <script>
        $('.carousel').carousel()
        $('.carousel').carousel({
  interval:10
})
        function register() {
            window.location.href = "registration.php";
        };
    </script>
    <nav class="navbar navbar-light shadow">
        <a class="navbar-brand" href="#">Polygon <i class="fa-solid fa-draw-polygon"></i> Bank</a>

    </nav>
    <div class="container" style="width: 100%;text-align:center">
    <br>
    <div class="row col-lg-12">
    <div class="col-lg-2"></div>
        <div id="carouselExampleIndicators" class=" carousel slide col-lg-8"  data-bs-ride="carousel">
        <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" style="background-color: grey;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="slide/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="slide/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="slide/3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="slide/4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="slide/5.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="slide/6.png" class="d-block w-100" alt="...">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>
            
        </div>
        <div class="col-lg-2"></div>
        </div>
        <br>
        <p>Click Register to creating Saving-Account</p>

        <button class="btn btn-primary" name="register" onclick="register()">Register</button>
        <br><br>
    </div>
    <footer class="footer-section" style="border-radius: 0px;">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Head-Office</h4>
                            <span>310-A,
                                Polygon bank,
                                Surat-395007,
                                Gujarat, India.
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+261 654321</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>polygon@info.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">

                <div class="col-xl-8 col-lg-8 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="Footer-Logo.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">Agent-Services</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest Scheme</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </footer>
</body>

</html>