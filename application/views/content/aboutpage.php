    <section class="py-5">
        <div class="container">
            <?php foreach($datas as $get):?>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-thumbnail" src="<?= base_url() ?>assets/about.JPG" width="500">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-40">About Our Shop</h2>
                    <All><?= $get->about_text ?></p>
                        <br>
                        </br>
                        <br>
                        </br>


                        <!-- Contact Details -->
                        <ul class="contact-short-info" style="list-style-type: none;">
                            <li>
                                <i class="bi bi-house-door-fill"></i>
                                <span><?= $get->address ?></span>

                            <li>
                                <i class="bi bi-whatsapp"></i>
                                <span><?= $get->phone_number ?></span>
                            </li>
                            <li>
                                <i class="bi bi-instagram"></i>
                                <span><?= $get->instagram ?></span>
                            </li>
                            <li>
                                <i class="bi bi-tiktok"></i>
                                <span><?= $get->tiktok ?></span>
                            </li>
                        </ul>

                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>