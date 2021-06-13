<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');

        if($this->session->userdata('status') !=="login"){
            redirect(base_url());
        }
	}

	public function index(){
		// $this->load->view('welcome_message');
		// $datanih = $this->db->query(" SELECT * FROM barang");
		// foreach($datanih->result_array() as $brg){
		// 	echo "kode :".$brg['kd_brg']."<br>";
		// 	echo "nama :".$brg['nm_brg']."<br>";
		// }
		// $this->load->model('modelku');
		// $databrg = $this->modelku->getDataBrg("barang");
		// // foreach ($databrg as $dat){
		// 	$data2 = array(
		// 		'data'=> $databrg
		// 	);
		// 	$this->load->view('home', $data2);
		// 	// echo "kode :".$det['kd_brg']."<br>";
		// 	// echo "nama :".$det['nm_brg']."<br>";
		// 	// echo "harga :".$det['harga']."<br>";
		// 	// echo "stok :".$det['stok']."<br>";
		// 	// echo "minimum :".$det['stok_min']."<br>";
		// 	// echo "gambar :".$det['gambar']."<br>";
		// }
		$databrg = $this->modelku->getDataBrg("barang");
		$data2 = array(
			'data' => $databrg
		);
		$this->load->view('home', $data2);
	}

	public function baca_form(){
		$this->load->view('form_tambah');
	}

	public function lihat_rumah(){
		$this->load->view('rumah');
	}

	public function tambah_data(){
		$dataIn = array(
			'kd_brg' => $this->input->post('kode'),
			'nm_brg' => $this->input->post('nama'),
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga'),
			'harga_beli' => $this->input->post('beli'),
			'stok' => $this->input->post('stok'),
			'stok_min' => $this->input->post('min'),
			'gambar' => $this->input->post('gambar')

		);
		$this->modelku->masuk('barang',$dataIn);
		redirect(base_url()."index.php/hal_admin/");
	}
	public function hapus_data($penunjuk){
		$datapen = array(
			'kd_brg' => $penunjuk
		);
		$this->load->model('modelku');
		$this->modelku->hapus('barang',$datapen);
		redirect(base_url()."index.php/hal_admin/");

	}

	public function ambil_datawhere($penunjuk){
		$datapen = array(
			'kd_brg' => $penunjuk
		);
		$databrg = $this->modelku->getData_khusus("barang", $datapen);
		$data2 = array(
			'data' => $databrg
			);
			$this->load->view('form_edit', $data2);
	}
	public function update_data(){
		$dataIn = array(
			'kd_brg' => $this->input->post('kode'),
			'nm_brg' => $this->input->post('nama'),
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga'),
			'harga_beli' => $this->input->post('beli'),
			'stok' => $this->input->post('stok'),
			'stok_min' => $this->input->post('min'),
			'gambar' => $this->input->post('gambar')
		);
		$datapen = array(
			'kd_brg' => $this->input->post('kode'),
		);
		$databrg = $this->modelku->perbarui("barang", $dataIn, $datapen);
		redirect(base_url()."index.php/hal_admin/");
	}
	// public function fungsi (){
	// 	echo "HALO DUNIA";
	// 	$this->load->view('home');
	// }
	// public function param($nama){
	// 	// echo "selamat kepada ".$nama;
	// 	$data2 = array(
	// 		'nama' => $nama
	// 	);
	// 	$this->load->view('home', $data2);
	// }
}