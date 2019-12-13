<div class="right_col" role="main">
  <?php if ($this->session->flashdata('msg_gagal')): ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong>Failed</strong> <?= $this->session->flashdata('msg_gagal'); ?>
    </div>
  <?php endif ?>
  <h1>Tambah Data Barang </h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Data Barang </h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="<?= base_url('Barang/editBarang') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="kode barang masuk">Kode Barang </label>
            <input type="text" name="kode_barang" value="<?= $barang->kd_barang ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Nama Barang </label>
            <input type="text" name="nama" value="<?= $barang->nama ?>" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Stok Barang </label>
            <input type="number" name="stok" id="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $barang->stok ?>" readonly>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Deskripsi </label>
            <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"><?= $barang->deskripsi ?></textarea>
          </div>
          <div class="form-group">
            <label for="">Gambar Barang</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="gambar" id="customFile">
              <label class="custom-file-label" for="customFile"><?= $barang->gambar ?></label>
            </div>
          </div>
          
              <a class="btn btn-primary" href="<?= base_url('Admin/barang') ?>">Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->