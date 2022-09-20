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
    <title><?= $title ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logocrookedputih.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=base_url('')?>assets/css/main.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/swiper-bundle.min.css">
    
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            
            <a class="navbar-brand" href="<?=base_url()?>">Crooked Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)==""){echo "active";} ?>" aria-current="page" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="about"){echo "active";} ?>" href="<?= base_url('about') ?>">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($this->uri->segment(2)=="shopping"){echo "active";} ?>" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('main/shopping') ?>">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('koleksi') ?>">Koleksi</a></li>
                            <li><a class="dropdown-item" href="#!">Sale</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><h6 class="dropdown-header" href="#!">Kategori</h6></li>
                            <li>
                                    <a class="dropdown-item" href="#">Top</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Bottom</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Outerwear</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Set</a>
                                </li>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>