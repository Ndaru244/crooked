<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-boxes"></i> <b>Produk Detail</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/product') ?>">Produk</a></li>
                        <li class="breadcrumb-item active">Produk Detail</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Detail Produk</b></h3>
                            <a href="<?= base_url('admin/product/edit/'.$datas->id_product) ?>" class="btn float-right btn-primary">Edit Data Produk</a>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" class="form-control" value="<?= $datas->product_name ?>" disabled>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Harga Produk</label>
                                        <input type="number" class="form-control" value="<?= $datas->product_price ?>" min=1 disabled>
                                    </div>
                                    <div class="col">
                                        <label for="">Harga Sales</label>
                                        <input type="number" class="form-control" value="<?= $datas->price_sale ?>" min=1 disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <input type="text" class="form-control" value="<?= $datacat->category_name ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea class="form-control" rows="3" disabled><?= $datas->product_description ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Link olsop Produk</label>
                                <div class="row">
                                    <div class="col"><input type="url" name="nama_brg" class="form-control" value="<?= $datas->link_tokopedia ?>" placeholder="Nama Barang" disabled></div>
                                    <div class="col"><input type="url" name="nama_brg" class="form-control" value="<?= $datas->link_shopee ?>" placeholder="Nama Barang" disabled></div>
                                    <div class="col"><input type="url" name="nama_brg" class="form-control" value="<?= $datas->link_tiktok ?>" placeholder="Nama Barang" disabled></div>
                                    <div class="col"><input type="url" name="nama_brg" class="form-control" value="<?= $datas->link_lazada ?>" placeholder="Nama Barang" disabled></div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Status Onshale Produk</label>
                                <input type="text" name="nama_brg" class="form-control" value="notsale" placeholder="Nama Barang" disabled>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <?php if ($this->session->flashdata('sukses')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
                            <?=
                            $this->session->flashdata('sukses');
                            $this->session->unset_userdata('sukses'); ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($error)) {
                        echo '
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>';
                        echo ($error);
                        echo '</div>';
                    } ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Gambar Produk</b></h3>
                            <button type="submit" class="btn float-right btn-primary" data-toggle="modal" data-target="#modal-lg">Tambah Gambar</button>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Gambar</th>
                                            <th style="width: 40px">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img class="rounded img-thumbnail mx-auto d-block" src="<?= base_url('/assets/product_images/' . $datas->product_picture) ?>" style="width: 50%;" />
                                            </td>
                                            <td><a href="#" class="btn btn-sm disabled btn-primary" style="cursor: not-allowed;">Master</a></td>
                                        </tr>
                                        <?php $no = 2;
                                        foreach ($dataimg as $get) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td>
                                                    <img class="rounded img-thumbnail mx-auto d-block" src="<?= base_url('/assets/product_images/' . $get->picture) ?>" style="width: 50%;" />
                                                </td>
                                                <td><a href="<?= base_url('admin/picture_delete/' . $get->id_picture) ?>" onclick="return confirm('anda yakin ingin menghapus Gambar ?')" class="btn btn-sm btn-danger">Hapus</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="modal fade" id="modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <?= form_open_multipart(base_url('admin/product/detail/' . $datas->id_product)) ?>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Gambar</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" name="id_product" value="<?= $datas->id_product ?>" hidden>
                                        <div class="form-group">
                                            <label for="">Upload Gambar</label>
                                            <img class="rounded img-thumbnail mx-auto d-block" id="blah" src="<?= base_url('/assets/admin/dist/img/default-img.png') ?>" alt="..." style="width: 50%;" />
                                            <div class="custom-file">
                                                <input name="picture" accept="image/*" type="file" class="custom-file-input" id="imgInp">
                                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                            </div>
                                            <!-- <p>content&hellip;</p> -->
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    <?= form_close() ?>
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


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