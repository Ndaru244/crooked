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
                        <li class="breadcrumb-item"><a href="<?=base_url('admin/product')?>">Produk</a></li>
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
                            <button type="submit" class="btn float-right btn-primary">Edit Data Produk</button>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="nama_brg" class="form-control" value="produk satu" placeholder="Nama Barang" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Produk</label>
                                <input type="number" name="harga_brg" class="form-control" value="5000" placeholder="Harga Barang" min=1 disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Produk</label>
                                <input type="text" name="nama_brg" class="form-control" value="kat" placeholder="Nama Barang" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="ket_brg" class="form-control" rows="3" disabled>Deskripsi</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Link olsop Produk</label>
                                <div class="row">
                                <div class="col-4"><input type="text" name="nama_brg" class="form-control" value="ig" placeholder="Nama Barang" disabled></div>
                                <div class="col-4"><input type="text" name="nama_brg" class="form-control" value="shopee" placeholder="Nama Barang" disabled></div>
                                <div class="col-4"><input type="text" name="nama_brg" class="form-control" value="tiktok" placeholder="Nama Barang" disabled></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Status Onshale Produk</label>
                                <input type="text" name="nama_brg" class="form-control" value="notsale" placeholder="Nama Barang" disabled>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Gambar Produk</b></h3>
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
                                            <td>1.</td>
                                            <td>img</td>
                                            <td><a href="" class="btn btn-sm btn-danger">Hapus</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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