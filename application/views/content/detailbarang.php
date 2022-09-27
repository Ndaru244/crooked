        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">


                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="img-fluid w-100 img-hover-zoom" id="zoomImg"><img id="MainImg" class="card-img-top mb-5 mb-md-0 main-img" src="<?= base_url('assets/product_images/' . $datas->product_picture) ?>" alt="..." /></div>

                        <div class="small-img-group mt-2">
                            <div class="small-img-col">
                                <img class="card-img-top mb-5 mb-md-0" id="small-img" src="<?= base_url('assets/product_images/' . $datas->product_picture) ?>" alt="..." />
                            </div>
                            <?php $no = 2;
                            foreach ($dataimg as $img) : ?>
                                <div class="small-img-col">
                                    <img class="card-img-top mb-5 mb-md-0 small-img" id="small-img<?= $no++ ?>" src="<?= base_url('assets/product_images/' . $img->picture) ?>" alt="..." />
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="small mb-1">
                            <i>Kategori: <b><?= $datacat->category_name ?> </b></i>
                        </div>
                        <h1 class="display-5 fw-bolder"><?= $datas->product_name ?></h1>
                        <?= $datas->price_sale == 0 ? "" : "<span class='badge fw-bolder bg-danger text-white'>onsale</span><br>" ?>
                        <div class="fs-5 mb-5">
                            
                            <?php
                            if ($datas->price_sale == 0) {
                                echo " <span>Rp." . number_format($datas->product_price, 0, ',', '.') . "</span>";
                            } elseif ($datas->price_sale != 0) {
                                echo "
                                <span class='text-muted text-decoration-line-through'><small><i>Rp." . number_format($datas->product_price, 0, ',', '.') . "</i></small></span><br>
                                <span>Rp." . number_format($datas->price_sale, 0, ',', '.') . "</span>";
                            }
                            ?>
                        </div>
                        <p class="lead"><?= $datas->product_description ?></p>
                        <div class="row">
                            <div class="col">
                                <div class="col mb-2">
                                    <a href="<?= $datas->link_tokopedia ?>" target="_blank" class="btn btn-block btn-outline-tokopedia">
                                        <i class="bi bi-shop"></i>
                                        Tokopedia
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="<?= $datas->link_shopee ?>" target="_blank" class="btn btn-block btn-outline-shopee">
                                        <i class="bi bi-shop"></i>
                                        Shopee
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col mb-2">
                                    <a href="<?= $datas->link_tiktok ?>" target="_blank" class="btn btn-block btn-outline-dark">
                                        <i class="bi bi-shop"></i>
                                        Tiktok
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="<?= $datas->link_lazada ?>" target="_blank" class="btn btn-block btn-outline-dark">
                                        <i class="bi bi-shop"></i>
                                        Lazada
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>