<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/download.jpg">
	<title>Laporan Data pemesanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  	<style type="text/css">
  		table tr td,
  		table tr th{
  			font-size: 10pt;
  		}
  	</style>

	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
	</style>

	<style>
	#customers {
  		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
	}

	#customers td, #customers th {
  	border: 1px solid #ddd;
  	padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>	
           <img src="assets/img/logoo.jpg" style="position: absolute; width: 100px; height: auto;"> 
           <table style="width: 105%;">
			<tr>
			<td align="center">
				<h1>Fayanbay Futsal</h1>
				    
				</td>
				
			</tr>
			
		</table><br>
		<hr class="line-title">
		<p align="center">
			<strong>LAPORAN DATA PEMESANAN</strong>
		</p>
		
        <table id="customers" class="table table-bordered">
			 <thead>
			 <tr align="center">

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
                 <tr align="center">
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $plg->kode_pemesanan?></td>
                      <td><?php echo $plg->nama_pemesanan?></td> 
                      <td><?php echo $plg->jam_pemesanan?></td>
                      <td><?php echo $plg->no_telp?></td>
                      <td><?php echo $plg->tgl_pemesanan?></td>
                      <td><?php echo $plg->dp?></td>
                      <td><?php echo $plg->lapangan?></td
                      
                     
                      
                  </tr>
                  
                
                <?php endforeach; ?>
	</tbody>
       </table><br>
	   <table width="30%" align="left" border="0">
	
	   <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><h3>Banjarmasin, <?php echo date('d/m/Y'); ?><br>Yang Bersangkutan, <br><br><br><br>.....................<br>________________<br></h3></td>
		</tr>
	</table>


<!-- page script -->
</body>
</html>