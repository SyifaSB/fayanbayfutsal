<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan pemesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan pemesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Data pemesanan</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">
              <?php echo anchor('administrator/report/reportpemesanan/print','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Print </button>') ?>
              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">

                <tr>
                <th>NO</th>
                  <th>kode pemesanan</th>
                  <th>Nama pemesanan</th>
                  <th>Jam Pemesanan</th> 
                  <th>Nomer Telpon</th>     
                  <th>Tanggal pemesanan</th> 
                  <th>DP</th> 
                  <th>Lapangan</th> 
                
                                                
                  
              
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_pemesanan as $plg) : ?>
                 <tr>
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $plg->kode_pemesanan?></td>
                      <td><?php echo $plg->nama_pemesanan?></td> 
                      <td><?php echo $plg->jam_pemesanan?></td>
                      <td><?php echo $plg->no_telp?></td>
                      <td><?php echo $plg->tgl_pemesanan?></td>
                      <td><?php echo $plg->dp?></td>
                      <td><?php echo $plg->lapangan?></td>
                      
                     
                     
                  </tr>
                  
                <?php endforeach; ?>
                </tbody>
                <tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
  <script>
    $(document).ready(function() {
    $('#form-status').hide();
    $('#filter').change(function() {
      if ($(this).val() == '0') { // Jika filter nya 1 (per tanggal)
        $('#form-status').hide(); // Sembunyikan form tanggal
      } else if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
        $('#form-status').show(); // Sembunyikan form bulan dan tahun
      } 

            $('#form-status select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        });
    });
    </script>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- page script -->
