<div class="right_col" role="main">
  <h1>Tambah Data Toko</h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Data Toko</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="<?= base_url('Toko/editToko') ?>" method="post">
          <div class="form-group">
            <label for="kode barang masuk">Kode Toko</label>
            <input type="text" name="kd_toko" value="<?= $toko->kd_toko ?>" id="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Nama Toko</label>
            <input type="text" name="nama" id="" class="form-control" value="<?= $toko->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">No Telephons</label>
            <input type="text" name="no_tlp" id="" class="form-control" value="<?= $toko->no_tlp ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Email</label>
            <input type="text" name="email" id="" class="form-control" value="<?= $toko->email ?>" required> 
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Alamat</label>
            <textarea name="alamat" id="" cols="30" rows="5" class="form-control" required><?= $toko->alamat ?></textarea>
          </div>
          
              <a class="btn btn-primary" href="<?= base_url('Admin/toko') ?>">Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->