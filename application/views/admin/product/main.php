<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-boxes"></i> <b>Produk</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
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
          <?php if ($this->session->flashdata('sukses')) { ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
              <?= 
              $this->session->flashdata('sukses');
              $this->session->unset_userdata('sukses'); ?>
            </div>
            <?php } ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Data Produk</b></h3>
                <a href="<?=base_url('admin/product/add')?>" class="btn float-right btn-primary">Tambah Produk</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th style="width: 40px">Tools</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($datas as $get): ?>
                  <tr>
                    <td>
                      <img class="rounded img-thumbnail mx-auto d-block" src="<?= base_url('/assets/product_images/thumbs/'.$get->product_picture) ?>" style="width: 50%;"/>
                    </td>
                    <td><?= $get->product_name ?></td>
                      <td>Rp.<?= number_format($get->product_price,0,',','.') ?></td>
                    <td>
                      <div class="row">
                        <div class="col-sm">
                          <a href="<?=base_url('admin/product/detail/'.$get->id_product)?>" class="btn btn-block btn-sm btn-primary mb-1">Detail</a>
                        </div>
                        <div class="col-sm">
                          <a href="#" class="btn btn-block btn-sm btn-success mb-1">Edit</a>
                        </div>
                        <div class="col-sm">
                          <a href="<?= base_url('admin/product/delete/'.$get->id_product) ?>" class="btn btn-block btn-sm btn-danger">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th style="width: 40px">Tools</th>
                  </tr>
                  </tfoot>
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