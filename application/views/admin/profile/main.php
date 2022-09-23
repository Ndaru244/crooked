<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-user-alt"></i> <b>Profile</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>assets/admin/dist/img/crooked.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $current_user->nama_user ?></h3>

                            <p class="text-muted text-center"><?= $current_user->username ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Pengaturan Profil</b> <a href="<?=base_url('admin/profile')?>" class="float-right">Lihat <i class="fas fa-angle-right"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Pengaturan Password</b> <a href="<?=base_url('admin/profile/security')?>" class="float-right">Lihat <i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>

                            <a href="<?=base_url('logout')?>" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt mr-lg-1"></i> <b>Keluar</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pengaturan Profil</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                        <input type="text" name="nama_user" class="form-control" value="<?= $current_user->nama_user ?>" placeholder="Nama">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Username</label>
                                        <input type="text" name="usernmae" class="form-control" value="<?= $current_user->username ?>" placeholder="Username">
                                </div>
                                
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn float-right btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>