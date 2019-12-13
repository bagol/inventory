
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <?php if ($this->session->flashdata('msg_berhasil')): ?>  
            <div class="alert alert-success alert-dismissible " role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong>Success</strong> <?= $this->session->flashdata('msg_berhasil'); ?>
            </div>
        <?php endif ?>
        <?php if ($this->session->flashdata('msg_gagal')): ?>      
          <div class="alert alert-danger alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Failed</strong> <?= $this->session->flashdata('msg_gagal'); ?>
          </div>
        <?php endif ?>
        <div class="title_left">
          <h3>Data Barang</small></h3>
        </div>

        <div class="title_right">
           <div class="col-md-5 col-sm-5">
           </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="page-title">
        <div class="title_left">
         <a class="btn btn-primary mb-3" href="<?= base_url('admin/addBarang') ?>"><i class="fa fa-plus"></i> Tamah Barang</a>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- top tiles -->
      
      <div class="row" style="display: block;" >
        <div class="col-lg-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Barang </h2>
              
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <div class="table-responsive">
                <table id="data_masuk" class="display ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Barang</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $no=1; foreach ($barangs as $barang): ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td><?= $barang['kd_barang'] ?></td>
                            <td><?= $barang['nama'] ?></td>
                            <td><?= $barang['stok'] ?></td>
                            <td><?= $barang['deskripsi'] ?></td>
                            <td><img src="<?= base_url('images/produk/') ?><?= $barang['gambar'] ?>" alt="<?= $barang['gambar'] ?>" style="width: 100px;" class="rounded border"></td>
                            <td><a class="btn btn-sm btn-success" href="<?= base_url('Admin/editBarang/') ?><?= $barang['kd_barang'] ?>"> <i class="fa fa-edit"></i> Ubah</a> 
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $barang['kd_barang'] ?>">
                                <i class="fa fa-trash"></i> Hapus
                              </button>
                            </td>
                          </tr>
                       <?php $no++; endforeach ?>
                    </tbody>
                </table>
              </div>


            </div>
          </div>
        </div>
      </div>
  </div>

</div>
 <!-- /page content -->

<!-- Modal Hapus -->
<?php foreach ($barangs as $b): ?>
  <div class="modal fade" id="hapus<?= $b['kd_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Anda Yakin Ingin Menghapush <b> <?= $b['nama'] ?> </b>  ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="<?= base_url('Barang/hapusBarang/') ?><?= $b['kd_barang'] ?>" class="btn btn-danger">Iya</a>
        </div>
      </div>
    </div>
  </div>
  
<?php endforeach ?>


<!-- footer content -->
<script>
  $(document).ready( function () {
    $('#data_masuk').DataTable();
} );
</script>