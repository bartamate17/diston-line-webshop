<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Supershop - Az Online Webshop - Kezdőlap</title>
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
                <li><a class="nav-link scrollto active" href="#hero">Létrehozás</a></li>
                <li><a class="nav-link scrollto" href="#productsAll">Terméklista</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kapcsolat</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<section id="hero">
    <div class="hero-container">
        <h1>Üdv a <b style="color:#f06730">Supershopban</b>!</h1>
        <h2>Nézzen, szerkesszen, töröljön és hozzon létre új termékeket.</h2>
        <a href="create.php" class="btn-get-started scrollto">Termék hozzáadása</a>
    </div>
</section>

<main id="main">
    <section id="team" class="team">
        <div class="container">
            <div class="section-title m-3">
                <h2>Termékeink</h2>
            </div>
            <div id="productsAll" class="row gy-4"></div>
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

</main>

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
<div class="modal fade" id="getSuccesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Termék szerkesztése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="getCode">
                <p>Sikeres szerkesztés!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Bezárás</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update Product -->
<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Termék szerkesztése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="getCode">
                <input type="number" id="idEditProduct" class="form-control" hidden>
                <label>Név: </label>
                <input type="text" id="nameEditProduct" class="form-control">
                <label>Ár: </label>
                <input type="number" id="priceEditProduct" class="form-control">
                <label>Leírás: </label>
                <textarea class="form-control" id="descriptionEditProduct" class="form-control" rows="5"></textarea>
            </div>
            <div class="modal-footer">
                <button id="save" type="button" class="btn btn-success">Mentés</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete Product -->
<div class="modal fade" id="deleteCodeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Termék törlése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="getCode">
                <input type="number" id="idDeleteProduct" class="form-control" hidden>
                <p>Biztosan szeretnéd a kiválasztott terméket törölni?</p>
            </div>

            <div class="modal-footer">
                <button type="button" id="deleteProduct" class="btn btn-danger">Törlés</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
            </div>
        </div>
    </div>
</div>

<a href="#hero" class="back-to-top d-flex align-items-center scrollto justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/ajax.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>