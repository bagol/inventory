<div class="right_col" role="main">
  <h1>Tambah Data User</h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Data User</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="<?= base_url('User/editUser') ?>" method="post">
          <div class="form-group">
            <label for="kode barang masuk">Kode User</label>
            <input type="text" name="kd_user" id="" value="<?= $user->kd_user ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Nama User</label>
            <input type="text" name="nama" id="" class="form-control" value="<?= $user->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Email</label>
            <input type="email" name="email" id="" class="form-control" value="<?= $user->email ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">No Telphon</label>
            <input type="text" name="no_tlp" id="" class="form-control" value="<?= $user->no_tlp ?>" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Role</label>
            <select name="role" id="" class="form-control" required>
              <option value="admin" <?= ($user->role == 'admin' ? 'selected' : '') ?> >Admin</option>
              <option value="admin_toko" <?= ($user->role == 'admin_toko' ? 'selected' : '') ?> >Admin Toko</option>
            </select>
          </div>
          
              <a class="btn btn-primary" href="<?= base_url('Admin/user') ?>" >Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->