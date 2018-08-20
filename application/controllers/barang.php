<?php
class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	function index()
	{
		$data['record']= $this->model_barang->tampil_data()->result();
		$this->load->view('barang/lihat_data',$data);
	}

	function post()
	{
		if(isset($_POST['submit'])){
			//proses Barang
			$this->model_kategori->post();
			redirect('kategori');
		}
		else{
			$this->load->view('barang/form_input');
		}
	}  
}
