
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
          <h3>Data Toko</small></h3>
        </div>

        <div class="title_right">
           <div class="col-md-5 col-sm-5">
           </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="page-title">
        <div class="title_left">
         <a class="btn btn-primary mb-3" href="<?= base_url('admin/addToko') ?>"><i class="fa fa-plus"></i> Tamah Toko</a>
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
              <h2>Data Toko</h2>
              
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <div class="table-responsive">
                <table id="data_masuk" class="display ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Toko</th>
                            <th>nama Toko</th>
                            <th>No Telphon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $no=1; foreach ($tokos as $toko): ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td><?= $toko['kd_toko'] ?></td>
                            <td><?= $toko['nama'] ?></td>
                            <td><?= $toko['no_tlp'] ?></td>
                            <td><?= $toko['email'] ?></td>
                            <td><?= $toko['alamat'] ?></td>
                            <td>
                              <a class="btn btn-sm btn-success" href="<?= base_url('Admin/editToko/') ?><?= $toko['kd_toko'] ?>"><i class="fa fa-edit"></i> Edit</a> 
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $toko['kd_toko'] ?>">
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
<?php foreach ($tokos as $t): ?>
  <div class="modal fade" id="hapus<?= $t['kd_toko'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Anda Yakin Ingin Menghapush <b> <?= $t['nama'] ?> </b>  ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="<?= base_url('User/deleteUser/') ?><?= $t['kd_toko'] ?>" class="btn btn-danger">Iya</a>
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