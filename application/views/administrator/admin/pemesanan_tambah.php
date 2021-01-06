<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah pemesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah pemesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/admin/pemesanan/input_aksi'); ?>
          <div class="card card-primary">

          <div class="form-group">
          
                  <label>kode pemesanan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="kode_pemesanan">
                  </div>
                  <?php echo form_error('kode_pemesanan','<div class="text-danger small" ml-3>') ?>
                </div>  

  

              <div class="form-group">
                  <label>Nama pemesan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nama_pemesanan">
                  </div>
                  <?php echo form_error('nama_pemesanan','<div class="text-danger small" ml-3>') ?>
                </div>


                <div class="form-group">
                  <label>jam pemesanan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="jam_pemesanan">
                  </div>
                  <?php echo form_error('jam_pemesanan','<div class="text-danger small" ml-3>') ?>
                </div>  

                <div class="form-group">
                  <label>Tanggal pemesanan</label>
                  <div class="input-group">
                    <input type="date" class="form-control" name="tgl_pemesanan">
                  </div>
                  <?php echo form_error('tgl_pemesanan','<div class="text-danger small" ml-3>') ?>
                </div>
         
            
              <div class="form-group">
                  <label>Nomer Telpon</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                  <?php echo form_error('no_telp','<div class="text-danger small" ml-3>') ?>
                </div>  
             
                <div class="form-group">
                  <label>DP</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="dp">
                  </div>
                  <?php echo form_error('dp','<div class="text-danger small" ml-3>') ?>
                </div>  
                
                <div class="form-group">
                  <label>Lapangan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="lapangan">
                  </div>
                  <?php echo form_error('lapangan','<div class="text-danger small" ml-3>') ?>
                </div>  
                           

               

              

             

                 

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/pemesanan','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
              <?php echo form_close(); ?>
    </div>
    
    </section>
  </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
 </div>

 