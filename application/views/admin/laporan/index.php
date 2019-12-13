<div class="right_col" role="main">
  <h1>Laporan Transaksi</h1>
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Laporan</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form class="form-lapor" action="">
          <div class="form-group">
            <label for="">Pilih Jenis Transaksi</label>
            <select name="jenis" id="jenis" class="form-control">
              <option value="masuk">Transaksi Masuk</option>
              <option value="keluar">Transaksi Keluar</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Pilih Bulan</label>
            <select name="bulan" id="bulan" class="form-control">
              <option value="1"> Januari </option>
              <option value="2"> Februari </option>
              <option value="3"> Maret </option>
              <option value="4"> April </option>
              <option value="5"> Mei </option>
              <option value="6"> Juni </option>
              <option value="7"> Juli </option>
              <option value="8"> Agustus </option>
              <option value="9"> September </option>
              <option value="10"> Oktober </option>
              <option value="11"> November </option>
              <option value="12"> Desember </option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" id="liat">Lihat</button>
          </div>
        </form>
      </div>
    </div>

    <div class="x_panel">
      <div class="x_title">
        <h2>Data Transaksi</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div id="tombol">
          
        </div>
        <table class="table display">
          <thead>
            <tr>
              <th>Kode Transaksi</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Nama Suplier</th>
              <th>Jumlah</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody id="transaksi"></tbody>
        </table>
      </div>
    </div>
  </div>
</div>
 <!-- /page content -->

 <script>
   $(document).ready(function(){
      $('#liat').on('click',function(e){
        e.preventDefault();
        $("#transaksi").html('');
        var data = $('.form-lapor').serialize();
        let html = '';
        $.ajax({
          type  : 'POST',
          url   : "<?= base_url('Laporan/laporan_transaksi') ?>",
          data  : data,
          dataType:'json',
          success: function(data,status)
          {
              data.forEach(function(item){
                html += `<tr>
                <td>${item.kode_barang_masuk}</td>
                <td>${item.kode_barang}</td>
                <td>${item.nama_barang}</td>
                <td>${item.nama_suplier}</td>
                <td>${item.jumlah}</td>
                <td>${item.tanggal}</td>
                </tr>
                `
              })
              $("#tombol").html(`<a class="btn btn-primary" href=""> Cetak </a> `);
              $("#transaksi").html(html);
          }
        })
      })
   })
 </script>