<?php

class pemasukan extends CI_Controller{


    
	public function index()
	{	
		$data['tb_pemasukan'] = $this->pemasukan_model->tampil_data('tb_pemasukan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemasukan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		
		$data['tb_pemasukan'] = $this->pemasukan_model->tampil_data('tb_pemasukan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemasukan_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
            
            $kode_pemasukan = $this->input->post('kode_pemasukan');
			$nama_pemasukan = $this->input->post('nama_pemasukan');
            $nominal = $this->input->post('nominal');
            $keterangan = $this->input->post('keterangan');	
			$tgl_pemasukan = $this->input->post('tgl_pemasukan');
				
						
			
			
			
        		$data = array(

					'kode_pemasukan' => $kode_pemasukan,
					'nama_pemasukan' => $nama_pemasukan,
    
                    'nominal' => $nominal,
                    'keterangan' => $keterangan,   
        			'tgl_pemasukan' => $tgl_pemasukan,
        					
        			
        		        			
        		);

        		$this->pemasukan_model->input_data($data,'tb_pemasukan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pemasukan Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pemasukan');
			}

		}
	public function _rules()
	{
        
        $this->form_validation->set_rules('kode_pemasukan','kode pemasukan','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('nama_pemasukan','Nama pemasukan','required',['required' => '%s Tidak Boleh Kosong!']);
		
       
        $this->form_validation->set_rules('nominal','No Telpon','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_pemasukan','Tanggal pemasukan','required',['required' => '%s Tidak Boleh Kosong!']);
		
		$this->form_validation->set_rules('keterangan','keterangan','required',['required' => '%s Tidak Boleh Kosong!']);
		
		
		
	}

 
	public function update($id)
	{
		$where = array('id' => $id);
		
		$data['tb_pemasukan'] = $this->pemasukan_model->edit_data($where,'tb_pemasukan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemasukan_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){

			
			$id = $this->input->post('id');
            $kode_pemasukan = $this->input->post('kode_pemasukan');
			$nama_pemasukan = $this->input->post('nama_pemasukan');
            $nominal = $this->input->post('nominal');
            $keterangan = $this->input->post('keterangan');	
			$tgl_pemasukan = $this->input->post('tgl_pemasukan');
			
				
				
				
					
			
			
			
        		$data = array(

                    'kode_pemasukan' => $kode_pemasukan,
					'nama_pemasukan' => $nama_pemasukan,
                    'nominal' => $nominal,
                    'keterangan' => $keterangan,   
        			'tgl_pemasukan' => $tgl_pemasukan,
        		      			
        			
        		        			
        		);

        		$where = array('id' => $id);

        		$this->pemasukan_model->update_data($where,$data,'tb_pemasukan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pemasukan Berhasil Diupdate!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pemasukan');

		}
	
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->pemasukan_model->hapus_data($where,'tb_pemasukan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data pemasukan Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/pemasukan');
	}

	
}