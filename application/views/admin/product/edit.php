<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-boxes"></i> <b>Edit Produk</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/product') ?>">Produk</a></li>
                        <li class="breadcrumb-item active">Produk Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?= validation_errors('
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>', '
                    </div>') ?>
                    <?php if (isset($error)) {
                        echo '
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>';
                        echo ($error);
                        echo '</div>';
                    } ?>
                    <div class="card">
                        <?= form_open('admin/product/edit/'.$datas->id_product) ?>
                        <div class="card-header">
                            <h3 class="card-title"><b>Form Edit Produk</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="product_name" class="form-control" value="<?= $datas->product_name ?>" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Harga Produk</label>
                                        <input type="number" name="product_price" class="form-control" value="<?= $datas->product_price ?>" min=1 required>
                                    </div>
                                    <div class="col">
                                        <label for="">Harga Sales <i>(Opsional)</i></label>
                                        <input type="number" name="price_sale" class="form-control" value="<?= $datas->price_sale ?>" min=0 max="<?= $datas->product_price ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <select name="id_category" class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach($data_cat as $data):?>
                                    <option value="<?= $data->id_category ?>" <?if($datas->id_category == $data->id_category){echo "selected"; }?>>
                                        <?= $data->category_name ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="product_description" class="form-control" id="summernote" required><?= $datas->product_description ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Link Olsop Produk</label>
                                <div class="row">
                                    <div class="col"><input type="url" name="link_tokopedia" class="form-control" value="<?= $datas->link_tokopedia ?>" required></div>
                                    <div class="col"><input type="url" name="link_shopee" class="form-control" value="<?= $datas->link_shopee ?>" required></div>
                                    <div class="col"><input type="url" name="link_tiktok" class="form-control" value="<?= $datas->link_tiktok ?>" required></div>
                                    <div class="col"><input type="url" name="link_lazada" class="form-control" value="<?= $datas->link_lazada ?>" required></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url("admin/product") ?>" onclick="return confirm('anda yakin ingin kembali ?')" class="btn btn-block btn-danger">Kembali</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->