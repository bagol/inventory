<div class="right_col" role="main">
  <h1>Tambah Data Barang keluar</h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Data Barang keluar</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="" method="post">
          <div class="form-group">
            <label for="kode barang masuk">Kode Barang Masuk</label>
            <input type="text" name="kode_barang_masuk" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="kode barang">Kode Barang</label>
            <select name="" id="barang" class="form-control">
              <option value="kosong">--- Pilih Barang ---</option>
              <?php foreach ($barang as $b): ?>
                  <option value="<?= $b['kd_barang'] ?>"><?= $b['nama'] ?> - stock <small> <?= $b['stok'] ?></small></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kode barang">Kode Toko</label>
            <select name="" id="" class="form-control">
              <option value="kosong">--- Pilih Toko ---</option>
              <?php foreach ($tokos as $toko): ?>
                  <option value="<?= $toko['kd_toko'] ?>"><?= $toko['nama'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Jumlah</label>
            <input type="text" name="jumlah" id="" class="form-control">
          </div>
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->