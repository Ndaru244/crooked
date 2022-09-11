<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-address-card"></i> <b>About Settings</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
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
                    <?php if ($this->session->flashdata('sukses')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
                            <?=
                            $this->session->flashdata('sukses');
                            $this->session->unset_userdata('sukses'); ?>
                        </div>
                    <?php } ?>
                    <?php foreach ($datas as $get) : ?>
                        <?= form_open('admin/about_update/' . $get->id_about) ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><b>Form About</b></h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">About</label>
                                    <textarea name="about_text" class="form-control" id="summernote" rows="4"><?= $get->about_text ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="address" class="form-control" rows="4"><?= $get->address ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">No Telepon</label>
                                    <input type="number" name="phone_number" class="form-control" value="<?= $get->phone_number ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" value="<?= $get->instagram ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tiktok</label>
                                    <input type="text" name="tiktok" class="form-control" value="<?= $get->tiktok ?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-primary">Ubah</button>
                            </div>
                            <!-- /.card -->
                        </div>
                        <?= form_close() ?>
                        <!-- /.col -->
                    <?php endforeach ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->