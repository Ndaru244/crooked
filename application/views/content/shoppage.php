    <section class="products section">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="widget">
                        <h6 class="widget-title">Sort By</h6>
                        <form method="post" action="#">
                            <select class="form-control">
                                <option>Latest</option>
                                <option>Sale</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($data->result() as $get) :?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/product_images/'.$get->product_picture)?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $get->product_name ?></h5>
                                <!-- Product price-->
                                Rp.<?= number_format($get->product_price,0,',','.') ?>
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
            <?php echo $pagination; ?>
            
            <!-- <div class="pagination justify-content-center">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div> -->
        </div>
    </section>