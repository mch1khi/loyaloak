<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Loyal Oak </title>
    <link rel="icon" type="image/x-icon" href="assets/img/small-logo.png" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/scripts.js" defer></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php#page-top"><img class="img-fluid" src="assets/img/logo.png" style="height: 30px;" alt="..." /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Over ons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Ons project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0" style="margin: 50px;">Loyal Oak</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Als de wortels van een eik, verbonden met zijn takken.</h2>
                    <a class="btn btn-primary" href="#about">Lees meer!</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8" style="margin:50px!important;">
                    <h2 class="text-white mb-4"><br /><br />Over ons</h2>
                    <p class="text-white-50">Hulp nodig voor een slagend marketingplan? Dan ben je bij ons aan het juiste adres. Wij hebben wereldwijd connecties met verschillende marketingbureaus en product-analisten. Daarbij zijn wij gespecialiseerd in het samenbrengen van fysiek met IT voor mooie resultaten.<br />
                    </p>
                    <img class="img-fluid" src="assets/img/back-to-work.png" style="width:342px;margin-bottom:60px;" alt="..." />
                </div>
            </div>
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7 projectimg"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/goal.jpeg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Ons doel</h4>
                        <p class="text-black-50 mb-0"><b>Samen zijn we perfect.</b><br />

                            Niemand is perfect maar iedereen heeft zijn of haar perfecties. Door een toepasselijke groepje perfecties te verbinden voor een specifiek opdracht zijn de slagingskansen tòch perfect.<br />Ons doel is om hèt verbindingspunt te zijn (of terwijl de <b>"Loyal Oak”</b>) van deze formule. </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 projectimg"><img class="img-fluid" src="assets/img/mentor.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Diensten</h4><br />
                                <p class="mb-0 text-white-50">Ben jij een freelancer/zzp’er en lukt het niet om een geschikte opdracht te vinden? Geen zorgen! Door behulp van een geschikte mentor die volgens een effectieve stappenplan een opdracht kiest wat het best aan jouw verlangen voldoet. </p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <p class="text-white mb-5" style="text-decoration: underline;font-size: 60px;font-family:var(--bs-body-font-family);">Contact</p>
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5"><br /> Laat uw mail achter en we nemen zo spoedig mogelijk contact met u op!</h2>
                    <form class="form-signup" id="contactForm" action="emailaction.php" method="POST">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input name="emailAddress" class="form-control" id="emailAddress" type="email" for="email" data-sb-validations="required,email" placeholder="voorbeeld@email.com" /></div>
                            <div class="col-auto"><button class="btn btn-primary" name="submit" id="submitButton" type="submit">Verzend!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Adres</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Vendelier 61, 3905 PD Veenendaal
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">sami@loyaloak.nl</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Nummer</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+31 6 30056685</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://www.linkedin.com/in/sami-kada-b00a88231/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5" style=" font-size: 19px;margin-top:5px;">
            Als de wortels van een eik, verbonden met zijn takken.</div><br />
        <img src="assets/img/small-logo.png" alt="Icon" height="70px" style="margin-top:10px;">
        <p>&copy; Loyal Oak | KVK: 12345678</p>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>