    <!-- Header-->
    <header>
        <div class="overlay"></div>
        <video preload="" playsinline="" autoplay="" muted="" loop="" __idm_id__="2670593">
            <source src="assets/headervid.m4v" type="video/mp4">
        </video>

        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <!-- <div class="w-100 text-white">
                    <h1 class="display-4 fw-bolder">Crooked Indonesia</h1>
                    <p class="lead fw-normal text-white-50 mb-0">📍Citra Raya, Tangerang, Banten</p>
                </div> -->
            </div>
        </div>

    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($datas as $get) :?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <?= $get->price_sale == 0 ? "" : "<div class='badge bg-danger text-white position-absolute' style='top: 0.5rem; right: 0.5rem'><b>On Sale</b></div>" ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/product_images/'.$get->product_picture)?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $get->product_name ?></h5>
                                <!-- Product price-->
                                <?php
                                if ($get->price_sale == 0) {
                                    echo 'Rp.'.number_format($get->product_price, 0 ,',','.');
                                } elseif ($get->price_sale != 0) {
                                    echo "
                                    <span class='text-muted text-decoration-line-through'><i>Rp.".number_format($get->product_price, 0, ',', '.')."</i></span>
                                     <br/> Rp.".number_format($get->price_sale, 0, ',', '.')."";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('detail/'.$get->id_product) ?>">Detail Products</a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

        <div class="text-center">
            <a class="btn btn-outline-dark mt-auto" href="<?= base_url('main/shopping') ?>" >Selengkapnya</a>
            
        </div>
    </section>