<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><i class="fas fa-tachometer-alt"></i> <b>Dashboard</b></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="callout callout-info bg-primary">
            <h5><i class="fas fa-grin"></i> Welcome!</h5>
            Selamat datang, <b class="title"><?= $current_user->nama_user ?></b>
          </div>
        </div>
      </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?php if ($rprd <= 9) {
                  echo '0'.$rprd;
                } else {
                  echo $rprd;
                } ?>
              </h3>

              <p>Data Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-boxes"></i>
            </div>
            <a href="<?= base_url('admin/product') ?>" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3>
              <?php if ($rcat <= 9) {
                  echo '0'.$rcat;
                } else {
                  echo $rcat;
                } ?>
            </h3>

              <p>Kategori</p>
            </div>
            <div class="icon">
              <i class="fas fa-tags"></i>
            </div>
            <a href="<?= base_url('admin/category') ?>" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->