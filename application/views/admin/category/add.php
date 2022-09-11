<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-boxes"></i> <b>Tambah Kategori</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/category') ?>">Kategori</a></li>
                        <li class="breadcrumb-item active">Kategori Tambah</li>
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
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>','
                    </div>') ?>
                <?= form_open('admin/category/add') ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Form Tambah Kategori</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="category_name" value="<?= set_value('category_name'); ?>" class="form-control" placeholder="Nama Kategori">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url("admin/category") ?>" onclick="return confirm('anda yakin ingin kembali ?')" class="btn btn-block btn-danger">Kembali</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <?= form_close() ?>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->