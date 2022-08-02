<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/homepage.css" rel="stylesheet" />
      <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?= base_url() ?>themefisher-font/style.css">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Crooked Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('' ) ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('about/about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/shopping') ?>">Shop</a></li>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-thumbnail" src="<?= base_url() ?>assets/test3.jpg" width="500">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-40">About Our Shop</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, accusantium repellat ex autem numquam iure officiis facere vitae itaque.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
                    <br>
                    </br>
                    <br>
                    </br>


                    <!-- Contact Details -->
                    <ul class="contact-short-info">
                        <li>
                            <i class="bi bi-house-door-fill"></i>
                            <span>Lagoon Ville, Citra Raya, Cikupa, Tangerang, Banten</span>
                        
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <span>Phone: +880-31-000-000</span>
                        </li>
                        <li>
                            <i class="bi bi-instagram"></i>
                            <span>crooked.ind</span>
                        </li>
                        <li>
                            <i class="bi bi-tiktok"></i>
                            <span>crooked.indonesia</span>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>


</body>

</html>