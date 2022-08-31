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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Form Tambah Produk</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="nama_brg" class="form-control" placeholder="Nama Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Produk</label>
                                <input type="number" name="harga_brg" class="form-control" placeholder="Harga Produk" min=1 required>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <select class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="">kat satu</option>
                                    <option value="">kat dua</option>
                                    <option value="">kat tiga</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="ket_brg" class="form-control" id="summernote" required>Deskripsi</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Link Olsop Produk</label>
                                <div class="row">
                                    <div class="col-4"><input type="text" name="nama_brg" class="form-control" placeholder="Link Instagram" required></div>
                                    <div class="col-4"><input type="text" name="nama_brg" class="form-control" placeholder="Link Shopee" required></div>
                                    <div class="col-4"><input type="text" name="nama_brg" class="form-control" placeholder="Link Tiktok" required></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Status Onshale Produk</label>
                                <select class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">notsale</option>
                                    <option value="">onsale</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="btn btn-block btn-danger">Batal</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
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