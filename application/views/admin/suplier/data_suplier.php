
<!-- page content -->
  <div class="right_col" role="main">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Suplier</small></h3>
        </div>

        <div class="title_right">
           <div class="col-md-5 col-sm-5">
           </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="page-title">
        <div class="title_left">
         <a class="btn btn-primary mb-3" href="<?= base_url('admin/addSuplier') ?>"><i class="fa fa-plus"></i> Tamah Suplier</a>
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
              <h2>Data Suplier</h2>
              
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <div class="table-responsive">
                <table id="data_masuk" class="display ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Suplier</th>
                            <th>Nama Suplier</th>
                            <th>No Telphon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $no=1; foreach ($supliers as $suplier): ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td><?= $suplier['kd_suplier'] ?></td>
                            <td><?= $suplier['nama'] ?></td>
                            <td><?= $suplier['no_tlp'] ?></td>
                            <td><?= $suplier['email'] ?></td>
                            <td><?= $suplier['alamat'] ?></td>
                            <td><a class="btn btn-sm btn-success" href=""><i class="fa fa-edit"></i> Edit</a> || <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i> Hapus</a> </td>
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
<!-- footer content -->
<script>
  $(document).ready( function () {
    $('#data_masuk').DataTable();
} );
</script>