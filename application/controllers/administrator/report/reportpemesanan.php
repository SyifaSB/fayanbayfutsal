<?php

class Reportpemesanan extends CI_Controller{

	public function index()
	{		
		$data['tb_pemesanan'] = $this->pemesanan_model->tampil_data('tb_pemesanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportpemesanan',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_pemesanan'] = $this->pemesanan_model->tampil_data('tb_pemesanan')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_pemesanan',$data);

 		}
}