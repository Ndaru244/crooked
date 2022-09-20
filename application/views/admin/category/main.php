<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-tags"></i> <b>Kategori</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
                <h3 class="card-title"><b>Data Kategori</b></h3>
                <a href="<?=base_url('admin/category/add')?>" class="btn float-right btn-primary">Tambah Kategori</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th style="width: 40px">Tools</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($datas as $get) :?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $get->category_name ?></td>
                    <td>
                      <div class="row">
                        <div class="col"><a href="<?= base_url('admin/category/edit/'.$get->id_category) ?>" class="btn btn-block btn-sm btn-success mb-1">Edit</a></div>
                        <div class="col"><a href="<?= base_url('admin/category/delete/'.$get->id_category) ?>" onclick="return confirm('anda yakin ingin menghapus data Kategori <?= $get->category_name ?> ?')" class="btn btn-block btn-sm btn-danger">Hapus</a></div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
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