<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-boxes"></i> <b>Tambah Produk</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/product') ?>">Produk</a></li>
                        <li class="breadcrumb-item active">Produk Tambah</li>
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
                        <?= form_open_multipart('admin/product/add') ?>
                        <div class="card-header">
                            <h3 class="card-title"><b>Form Tambah Produk</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="product_name" class="form-control" placeholder="Nama Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Produk</label>
                                <input type="number" name="product_price" class="form-control" placeholder="Harga Produk" min=1 required>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <select name="id_category" class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($data_cat as $get) : ?>
                                        <option value="<?= $get->id_category ?>"><?= $get->category_name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="product_description" class="form-control" id="summernote" required>Deskripsi</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Link Olsop Produk</label>
                                <div class="row">
                                    <div class="col-4"><input type="text" name="link_tokopedia" class="form-control" placeholder="Link Tokopedia" required></div>
                                    <div class="col-4"><input type="text" name="link_shopee" class="form-control" placeholder="Link Shopee" required></div>
                                    <div class="col-4"><input type="text" name="link_tiktok" class="form-control" placeholder="Link Tiktok" required></div>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="">Upload Gambar</label>
                                <img class="rounded img-thumbnail mx-auto d-block" id="blah" src="<?= base_url('/assets/admin/dist/img/default-img.png') ?>" alt="..." style="width: 25%;" />
                                <div class="custom-file">
                                    <input name="product_picture" accept="image/*" type="file" class="custom-file-input" id="imgInp">
                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url("admin/product") ?>" onclick="return confirm('anda yakin ingin kembali ?')" class="btn btn-block btn-danger">Kembali</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
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