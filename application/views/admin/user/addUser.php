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
        <form action="<?= base_url('User/addUser') ?>" method="post">
          <div class="form-group">
            <label for="kode barang masuk">Kode User</label>
            <input type="text" name="kd_user" id="" class="form-control" required maxlength="10">
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Nama User</label>
            <input type="text" name="nama" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Email</label>
            <input type="email" name="email" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">No Telphon</label>
            <input type="text" name="no_tlp" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Password</label>
            <input type="password" name="password" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kode barang masuk">Role</label>
            <select name="role" id="" class="form-control" required>
              <option value="admin">Admin</option>
              <option value="admin_toko">Admin Toko</option>
            </select>
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