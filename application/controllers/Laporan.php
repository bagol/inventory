<?php
include('Admin.php');
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Laporan extends Admin {
	


	function __construct(){
		parent::__construct();
		$this->load->model('M_barangMasuk');
		$this->load->helper('bulan');
	}

	public function laporan_bulan_ini()
     {
     	  $now = date_format(date_create(),'m');
     	  $tanggal = date_format(date_create(),'d-m-Y');
          $transaksis = $this->M_barangMasuk->transaksiBulan($now)->result_array();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Kode Transaksi')
                      ->setCellValue('C1', 'Kode Barang')
                      ->setCellValue('D1', 'Nama Barang')
                      ->setCellValue('E1', 'Nama Suplier')
                      ->setCellValue('F1', 'Jumlah Barang')
                      ->setCellValue('G1', 'Tanggal');

          $kolom = 2;
          $nomor = 1;
          foreach($transaksis as $transaksi) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $transaksi['kode_barang_masuk'])
                           ->setCellValue('C' . $kolom, $transaksi['kode_barang'])
                           ->setCellValue('D' . $kolom, $transaksi['nama_barang'])
                           ->setCellValue('E' . $kolom, $transaksi['nama_suplier'])
                           ->setCellValue('F' . $kolom, $transaksi['jumlah'])
                           ->setCellValue('G' . $kolom, $transaksi['tanggal']);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);

      header('Content-Type: application/vnd.ms-excel');
		  header('Content-Disposition: attachment;filename="laporan_transaksi_masuk_'.$tanggal.'.xlsx"');
		  header('Cache-Control: max-age=0');

		  $writer->save('php://output');
     }


     function laporan_transaksi(){
       $test = [];
       $data = $this->M_barangMasuk->transaksiBulan($this->input->post('bulan'))->result_array();

       echo json_encode($data);
     }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */