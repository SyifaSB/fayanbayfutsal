<?php

class Reportpemasukan extends CI_Controller{

	public function index()
	{		
		$data['tb_pemasukan'] = $this->pemasukan_model->tampil_data('tb_pemasukan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportpemasukan',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_pemasukan'] = $this->pemasukan_model->tampil_data('tb_pemasukan')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_pemasukan',$data);

 		}
}