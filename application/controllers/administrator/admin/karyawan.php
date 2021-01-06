<?php

class karyawan extends CI_Controller{


    
	public function index()
	{	
		$data['tb_karyawan'] = $this->karyawan_model->tampil_data('tb_karyawan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		
		$data['tb_karyawan'] = $this->karyawan_model->tampil_data('tb_karyawan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
            
            $kode_karyawan = $this->input->post('kode_karyawan');
			$nama_karyawan = $this->input->post('nama_karyawan');
            $no_telp = $this->input->post('no_telp');
			$tgl_masuk = $this->input->post('tgl_masuk');
			$gaji = $this->input->post('gaji');		
						
			
			
			
        		$data = array(

					'kode_karyawan' => $kode_karyawan,
					'nama_karyawan' => $nama_karyawan,
    
                    'no_telp' => $no_telp,
        			'tgl_masuk' => $tgl_masuk,
        			'gaji' => $gaji,   			
        			
        		        			
        		);

        		$this->karyawan_model->input_data($data,'tb_karyawan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data karyawan Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/karyawan');
			}

		}
	public function _rules()
	{
        
        $this->form_validation->set_rules('kode_karyawan','kode karyawan','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('nama_karyawan','Nama karyawan','required',['required' => '%s Tidak Boleh Kosong!']);
		
       
        $this->form_validation->set_rules('no_telp','No Telpon','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_masuk','Tanggal masuk','required',['required' => '%s Tidak Boleh Kosong!']);
		
		$this->form_validation->set_rules('gaji','gaji','required',['required' => '%s Tidak Boleh Kosong!']);
		
		
		
	}

 
	public function update($id)
	{
		$where = array('id' => $id);
		
		$data['tb_karyawan'] = $this->karyawan_model->edit_data($where,'tb_karyawan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){

			
			$id = $this->input->post('id');
            $kode_karyawan = $this->input->post('kode_karyawan');
			$nama_karyawan = $this->input->post('nama_karyawan');
            $no_telp = $this->input->post('no_telp');
			$tgl_masuk = $this->input->post('tgl_masuk');
			$gaji = $this->input->post('gaji');		
				
				
				
					
			
			
			
        		$data = array(

                    'kode_karyawan' => $kode_karyawan,
					'nama_karyawan' => $nama_karyawan,
					'no_telp' => $no_telp,
        			'tgl_masuk' => $tgl_masuk,
        			'gaji' => $gaji,         			
        			
        		        			
        		);

        		$where = array('id' => $id);

        		$this->karyawan_model->update_data($where,$data,'tb_karyawan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data karyawan Berhasil Diupdate!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/karyawan');

		}
	
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->karyawan_model->hapus_data($where,'tb_karyawan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data karyawan Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/karyawan');
	}

	
}