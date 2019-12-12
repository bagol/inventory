<!-- page content -->
<div class="right_col" role="main">
          <!-- top tiles -->
        <div class="row" style="display: block;" >
				<div class="tile_count">
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
				  <div class="count"><?= $total_user ?></div>
				</div>
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-download"></i> Total Transaksi Masuk</span>
				  <div class="count"><?= $jml_transaksiMasuk ?></div>
				</div>
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-upload"></i> Total Transaksi Keluar</span>
				  <div class="count "><?= $jml_transaksiKeluar ?></div>
				</div>
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-archive"></i> Total Barang</span>
				  <div class="count"><?= $total_barang ?></div>
				</div>
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-map-marker"></i> Total Toko</span>
				  <div class="count"><?= $total_toko ?></div>
				  
				</div>
				<div class="col-md-2 col-sm-4  tile_stats_count">
				  <span class="count_top"><i class="fa fa-truck"></i> Total Suplier</span>
				  <div class="count"><?= $total_suplier ?></div>
				</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="row" style="display: block;" >
	        <div class="col-lg-12 col-sm-12  ">
		        <div class="x_panel">
		            <div class="x_title">
		              <h2>Data Barang Masuk Bulan Ini</h2>
		              
		              <div class="clearfix"></div>
		            </div>

		            <div class="x_content">
			            <div class="table-responsive">
			              <table id="data_masuk" class="display " style="width: 100%;">
			                    <thead>
			                        <tr>
			                            <th>No</th>
			                            <th>Kode Transaksi</th>
			                            <th>Kode Barang</th>
			                            <th>Nama Barang</th>
			                            <th>Nama Suplier</th>
			                            <th>Jumlah</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                       <?php $no=1; foreach ($transaksi_bulan_ini as $barang): ?>
			                          <tr>
			                            <td><?= $no ?></td>
			                            <td><?= $barang['kode_transaksi'] ?></td>
			                            <td><?= $barang['kode_barang'] ?></td>
			                            <td><?= $barang['nama_barang'] ?></td>
			                            <td><?= $barang['nama_suplier'] ?></td>
			                            <td><?= $barang['jumlah'] ?></td>
			                          </tr>
			                       <?php $no++; endforeach ?>
			                    </tbody>
			              </table>
			            </div>
		            </div>
		        </div>
	        </div>
		</div>
		<div class="clearfix"></div>
		<hr>
	        <div class="x_panel">
	            <div class="x_title">
	              <h2>Data Barang Keluar Bulan Ini</h2>
	              
	              <div class="clearfix"></div>
	            </div>

	            <div class="x_content">
		            <div class="table-responsive">
		              <table id="data_masuk" class="display " style="width: 100%;">
		                    <thead>
		                        <tr>
		                            <th>No</th>
		                            <th>Kode Transaksi</th>
		                            <th>Kode Barang</th>
		                            <th>Nama Barang</th>
		                            <th>Nama Suplier</th>
		                            <th>Jumlah</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                       <?php $no=1; foreach ($transaksi_keluar_bulan_ini as $barang): ?>
		                          <tr>
		                            <td><?= $no ?></td>
		                            <td><?= $barang['transaksi_keluar'] ?></td>
		                            <td><?= $barang['kode_barang'] ?></td>
		                            <td><?= $barang['nama_barang'] ?></td>
		                            <td><?= $barang['nama_toko'] ?></td>
		                            <td><?= $barang['jumlah'] ?></td>
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
<!-- /top tiles -->
        </div>
        </div>
        <!-- /page content -->
<!-- footer content -->
