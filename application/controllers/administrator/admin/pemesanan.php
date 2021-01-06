<?php

class pemesanan extends CI_Controller{


    
	public function index()
	{	
		$data['tb_pemesanan'] = $this->pemesanan_model->tampil_data('tb_pemesanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemesanan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		
		$data['tb_pemesanan'] = $this->pemesanan_model->tampil_data('tb_pemesanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemesanan_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
            
            $kode_pemesanan = $this->input->post('kode_pemesanan');
			$nama_pemesanan = $this->input->post('nama_pemesanan');
            $jam_pemesanan = $this->input->post('jam_pemesanan');
            $no_telp = $this->input->post('no_telp');	
            $tgl_pemesanan = $this->input->post('tgl_pemesanan');
            $dp = $this->input->post('dp');
            $lapangan = $this->input->post('lapangan');
				
						
			
			
			
        		$data = array(

					'kode_pemesanan' => $kode_pemesanan,
					'nama_pemesanan' => $nama_pemesanan,
    
                    'jam_pemesanan' => $jam_pemesanan,
                    'no_telp' => $no_telp,   
                    'tgl_pemesanan' => $tgl_pemesanan,
                    'dp' => $dp,
                    'lapangan' => $lapangan,
        					
        			
        		        			
        		);

        		$this->pemesanan_model->input_data($data,'tb_pemesanan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pemesanan Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pemesanan');
			}

		}
	public function _rules()
	{
        
        $this->form_validation->set_rules('kode_pemesanan','kode pemesanan','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('nama_pemesanan','Nama pemesanan','required',['required' => '%s Tidak Boleh Kosong!']);
		
       
        $this->form_validation->set_rules('jam_pemesanan','No Telpon','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_pemesanan','Tanggal pemesanan','required',['required' => '%s Tidak Boleh Kosong!']);
		
        $this->form_validation->set_rules('no_telp','no telp','required',['required' => '%s Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('dp','dp','required',['required' => '%s Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('lapangan','lapangan','required',['required' => '%s Tidak Boleh Kosong!']);
		
		
		
	}

 
	public function update($id)
	{
		$where = array('id' => $id);
		
		$data['tb_pemesanan'] = $this->pemesanan_model->edit_data($where,'tb_pemesanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pemesanan_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){

			
			$id = $this->input->post('id');
            $kode_pemesanan = $this->input->post('kode_pemesanan');
			$nama_pemesanan = $this->input->post('nama_pemesanan');
            $jam_pemesanan = $this->input->post('jam_pemesanan');
            $no_telp = $this->input->post('no_telp');	
            $tgl_pemesanan = $this->input->post('tgl_pemesanan');
            $dp = $this->input->post('dp');
            $lapangan = $this->input->post('lapangan');
			
				
				
				
					
			
			
			
        		$data = array(

                    'kode_pemesanan' => $kode_pemesanan,
					'nama_pemesanan' => $nama_pemesanan,
                    'jam_pemesanan' => $jam_pemesanan,
                    'no_telp' => $no_telp,   
                    'tgl_pemesanan' => $tgl_pemesanan,
                    'dp' => $dp,
                    'lapangan' => $lapangan,
        		      			
        			
        		        			
        		);

        		$where = array('id' => $id);

        		$this->pemesanan_model->update_data($where,$data,'tb_pemesanan');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data pemesanan Berhasil Diupdate!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pemesanan');

		}
	
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->pemesanan_model->hapus_data($where,'tb_pemesanan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data pemesanan Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/pemesanan');
	}

	
}