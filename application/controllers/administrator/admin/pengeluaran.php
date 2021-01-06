<?php

class pengeluaran extends CI_Controller{


    
	public function index()
	{	
		$data['tb_pengeluaran'] = $this->pengeluaran_model->tampil_data('tb_pengeluaran')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaran',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		
		$data['tb_pengeluaran'] = $this->pengeluaran_model->tampil_data('tb_pengeluaran')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaran_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
            
            $kode_pengeluaran = $this->input->post('kode_pengeluaran');
			$nama_pengeluaran = $this->input->post('nama_pengeluaran');
            $nominal = $this->input->post('nominal');
            $keterangan = $this->input->post('keterangan');	
			$tgl_pengeluaran = $this->input->post('tgl_pengeluaran');
				
						
			
			
			
        		$data = array(

					'kode_pengeluaran' => $kode_pengeluaran,
					'nama_pengeluaran' => $nama_pengeluaran,
    
                    'nominal' => $nominal,
                    'keterangan' => $keterangan,   
        			'tgl_pengeluaran' => $tgl_pengeluaran,
        					
        			
        		        			
        		);

        		$this->pengeluaran_model->input_data($data,'tb_pengeluaran');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pengeluaran Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pengeluaran');
			}

		}
	public function _rules()
	{
        
        $this->form_validation->set_rules('kode_pengeluaran','kode pengeluaran','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('nama_pengeluaran','Nama pengeluaran','required',['required' => '%s Tidak Boleh Kosong!']);
		
       
        $this->form_validation->set_rules('nominal','No Telpon','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_pengeluaran','Tanggal pengeluaran','required',['required' => '%s Tidak Boleh Kosong!']);
		
		$this->form_validation->set_rules('keterangan','keterangan','required',['required' => '%s Tidak Boleh Kosong!']);
		
		
		
	}

 
	public function update($id)
	{
		$where = array('id' => $id);
		
		$data['tb_pengeluaran'] = $this->pengeluaran_model->edit_data($where,'tb_pengeluaran')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaran_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){

			
			$id = $this->input->post('id');
            $kode_pengeluaran = $this->input->post('kode_pengeluaran');
			$nama_pengeluaran = $this->input->post('nama_pengeluaran');
            $nominal = $this->input->post('nominal');
            $keterangan = $this->input->post('keterangan');	
			$tgl_pengeluaran = $this->input->post('tgl_pengeluaran');
			
				
				
				
					
			
			
			
        		$data = array(

                    'kode_pengeluaran' => $kode_pengeluaran,
					'nama_pengeluaran' => $nama_pengeluaran,
                    'nominal' => $nominal,
                    'keterangan' => $keterangan,   
        			'tgl_pengeluaran' => $tgl_pengeluaran,
        		      			
        			
        		        			
        		);

        		$where = array('id' => $id);

        		$this->pengeluaran_model->update_data($where,$data,'tb_pengeluaran');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pengeluaran Berhasil Diupdate!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pengeluaran');

		}
	
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->pengeluaran_model->hapus_data($where,'tb_pengeluaran');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data pengeluaran Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/pengeluaran');
	}

	
}