<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/admin/karyawan/input_aksi'); ?>
          <div class="card card-primary">

          <div class="form-group">
          
                  <label>kode karyawan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="kode_karyawan">
                  </div>
                  <?php echo form_error('kode_karyawan','<div class="text-danger small" ml-3>') ?>
                </div>  

  

              <div class="form-group">
                  <label>Nama karyawan</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nama_karyawan">
                  </div>
                  <?php echo form_error('nama_karyawan','<div class="text-danger small" ml-3>') ?>
                </div>


                <div class="form-group">
                  <label>No Telpon</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                  <?php echo form_error('no_telp','<div class="text-danger small" ml-3>') ?>
                </div>  

                <div class="form-group">
                  <label>Tanggal masuk</label>
                  <div class="input-group">
                    <input type="date" class="form-control" name="tgl_masuk">
                  </div>
                  <?php echo form_error('tgl_masuk','<div class="text-danger small" ml-3>') ?>
                </div>
         
            
              <div class="form-group">
                  <label>gaji</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="gaji">
                  </div>
                  <?php echo form_error('gaji','<div class="text-danger small" ml-3>') ?>
                </div>  
             
                

                           

               

              

             

                 

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/karyawan','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
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

 