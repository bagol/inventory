<div class="right_col" role="main">
  <h1>Tambah Data Suplier</h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Data Suplier</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="<?= base_url('Suplier/editSuplier') ?>" method="post">
          <div class="form-group">
            <label for="kode barang masuk">Kode Suplier</label>
            <input type="text" name="kd_suplier" id="" value="<?= $suplier->kd_suplier ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Nama Suplier</label>
            <input type="text" name="nama" id="" class="form-control" value="<?= $suplier->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">No Telephons</label>
            <input type="text" name="no_tlp" id="" class="form-control" value="<?= $suplier->no_tlp ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Email</label>
            <input type="text" name="email" id="" class="form-control" value="<?= $suplier->email ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Alamat</label>
            <textarea name="alamat" id="" cols="30" rows="5" class="form-control" required><?= $suplier->alamat ?></textarea>
          </div>
          
              <a class="btn btn-primary" href="<?= base_url('Admin/suplier') ?>" >Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->