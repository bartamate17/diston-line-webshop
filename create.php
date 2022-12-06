<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Supershop - Az Online Webshop - Termék létrehozása</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.1.min.js"></script>
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto">
            <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Kezdőlap</a></li>
                <li><a class="nav-link scrollto active" href="#addProductHeader">Terméklista</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kapcsolat</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<main id="main" style="background-color: #f2f5f5;">
    <section id="team" class="team" style="text-align: center !important; margin: 0 auto !important;">
        <div id="addProductHeader">
            <h1>Termék létrehozása</h1>
            <h5>Add listánkhoz saját terméked!</h5>
        </div>

        <div class="m-5">
            <form id="createProduct" class="w-50" style="margin: 0 auto !important;">
                <input type="text" name="img" class="form-control" value="assets/img/products/default.jpg"
                       hidden>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Termék neve"
                           required>
                </div>
                <div class="form-group mt-3">
                    <input type="number" class="form-control" name="price" id="price" placeholder="Termék ára"
                           required>
                </div>
                <div class="form-group mt-3">
                            <textarea class="form-control" name="description" rows="5" placeholder="Leírás"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                            style="background-color: #f06730 !important; border-color: #f06730 !important;"
                            class="btn btn-primary m-3 w-25">Létrehozás</button>
                </div>
                <div class="text-center">
                    <a href="index.php" style="text-decoration: underline;">Vissza a kezdőlapra</a>
                </div>
            </form>
        </div>
    </section>

    <section id="contact" class="contact section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Kapcsolat</h2>
            </div>

            <div class="row">
                <div>
                    <div class="contact-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum, lorem sit amet aliquet aliquet, nulla quam consectetur nibh, vitae pretium ligula arcu eget est. Sed malesuada tristique pellentesque. Nullam euismod, diam a scelerisque varius, felis elit porttitor ante, id congue elit nunc eget tortor. Vivamus accumsan ipsum eu quam tristique commodo. Pellentesque tincidunt condimentum ex at pharetra. Curabitur bibendum eros quam, vel scelerisque diam scelerisque in. Maecenas in finibus ex. Sed vestibulum a risus accumsan gravida. Suspendisse potenti. Quisque maximus neque quis arcu blandit facilisis. Ut ornare magna dui, id fermentum velit rhoncus non. Fusce in justo et ante feugiat pellentesque non eu ligula. Sed volutpat, nisl non dapibus pharetra, ex ligula blandit neque, sed cursus purus dolor non purus. In iaculis vulputate arcu vitae volutpat. Mauris sagittis risus eget lacus volutpat, vel malesuada enim gravida.</p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Amoeba</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Termék létrehozása</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="getCode">
                    <p>Sikeres mentés!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Bezárás</button>
                </div>
            </div>
        </div>
    </div>

    <a href="#team" class="back-to-top d-flex align-items-center scrollto justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>