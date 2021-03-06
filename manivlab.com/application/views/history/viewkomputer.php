<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>History Manivlab</title>
    <script src='../assets/jquery.js'></script>
	<link href='../assets/css/datatables.css' rel='stylesheet' type='text/css'>
    <link href='../assets/css/dataTables.bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='../assets/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    
    <script src='../assets/jquery.dataTables.min.js'></script>
    
    

</head>


<body>
            <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>assets/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>gb">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>inventaris">Inventaris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>managelab">Management Lab</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>penjadwalan">Scheduling</a>
            </li>
             
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">	History</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url();?>history">Non-Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>history/viewkomputer">Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>history/viewhistorylaporan">Laporan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/eticketing">E-Ticketing</a>
            </li>
        </ul>

    </nav>

  <div class="content">
      <br><br>
    <center>
      <h1> HISTORY KOMPUTER</h1></center>
    
  </div>
<ul>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    
</ul>
 
 
 
 
 <div class="row-fluid sortable">	
<div class="box span12">

		<div class="box-header"  data-original-title style=" background: #D6D6D6 !important;" >
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Keluhan Masuk</h2>
                        </div>
           <div class="content">
              <div class="row">
                <div class="col-md-12">
                            <div class="box-body">
                               <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>NO</th>
                                        <th>DARI</th>
                                        <th>TGL KELUHAN</th>
                                        <th>LABKOM</th>
                                        <th>SUBJECT</th>
                                        <th>ALASAN</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($table -> result() as $row) {?>
                                    <tr>
                                        <td><?php echo $row->no; ?></td>
                                        <td><?php echo $row->dari; ?></td>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td><?php echo $row->labkom; ?> (<?php echo $row->object; ?>)</td
                                        ><td><?php echo $row->kepada; ?></td>
                                        <td><?php echo $row->alasan;?></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                </div><!-- /.box -->
             </div><!-- /.col -->
          </div><!-- /.row -->
  <div class="row-fluid sortable">		
				<div class="box span12">
<div class="box-header" data-original-title style=" background: #D6D6D6 !important;">
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Tindak Lanjut Keluhan</h2>
						
					</div>
					<div class="box-content">
						
						<table id="tabel_identifikasi_keluhan" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
										<th>NO</th>
                                        <th>DARI</th>
                                        <th>TANGGAL</th>
                                        <th>IDENTIFIKASI</th>
                                        
							  </tr>
						  </thead>   
						  <tbody>
						  	<!-- Pengambilan item list dari database -->
		                  <?php foreach($table2 -> result() as $row) {?>
                                    <tr>
                                        <td><?php echo $row->no; ?></td>
                                        <td><?php echo $row->dari; ?></td>
                                        <td><?php echo $row->tanggal; ?></td>
                                		<td><?php echo $row->identifikasi; ?></td>
                                    </tr>
                                    <?php } ?>
                          </tbody>
                                </td>
					  </table>            
					</div>
				</div><!--/span-->
			
		  </div><!--/row-->          
        
       
        			<div class="box span12">
	  <div class="box-header" data-original-title style=" background: #D6D6D6 !important;">
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Barang Masuk</h2>
						
					</div>
					<div class="box-content">
						
						<table id="tabel_item_masuk" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							 			 <tr>
                              			<th>NO</th>
										<th>KODE BARANG</th>
                                        <th>NAMA BARANG</th>
                                        <th>TAHUN BELI</th>
                                        <th>TGL TRANSAKSI</th>
                                                                          
							  			</tr>
						  </thead>   
						  <tbody>
						  	<!-- Pengambilan item list dari database -->
		                  <?php $count = 1;
						  foreach($komp -> result() as $row) {?>
                                    <tr>
                                        <td class="center" value="<?php echo $row->id?>"><?php echo $count?></td>
                                        <td><?php echo $row->kode_barang; ?></td>
                                        <td><?php echo $row->nama_barang; ?> </td>
                                        <td><?php echo $row->tahunbeli_komp; ?></td>
                                        <td><?php echo $row->tanggal_transaksi; ?></td>
                                		
                                    </tr>
                                    <?php $count++; }?>
                          </tbody>
                                </td>
					  </table>            
					</div>
				</div><!--/span-->
			
            
  		<div class="box span12">
<div class="box-header" data-original-title style=" background: #D6D6D6 !important;">
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Pindah Barang</h2>
						
					</div>
					<div class="box-content">
						
						<table id="tabel_item_keluar" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
										<th>NO</th>
                                        <th>KODE BARANG</th>
                                        <th>NAMA BARANG</th>
										<th>LOKASI AWAL</th>
                                        <th>LOKASI AKHIR</th>
                                        <th>TANGGAL TRANSAKSI</th>
                                                                                
							  </tr>
						  </thead>   
						  <tbody>
						  	<!-- Pengambilan item list dari database -->
		                  <?php 
						  $count = 1;
						  foreach($manajemenbarang -> result() as $row) 
						  {?>
                                    <tr>
                                      <td class="center" value="<?php echo $row->id?>"><?php echo $count?></td>
                                         <td class="center"><?php echo $row->kode_barang; ?></td>
                                        <td><?php echo $row->nama_barang; ?></td>

                                        <td><?php echo $row->lokasibarang_awal; ?></td>
                                        <td><?php echo $row->lokasibarang_akhir; ?></td>
                               			<td><?php echo $row->tanggal_transaksi; ?></td>
                                    </tr>
                                    <?php $count++;} ?>
                          </tbody>
                                </td>
					  </table>            
					</div>
		  </div>          
            
</div>
        
</div>
    </div>
    
    
    <script src="../assets/js/history.js"></script>
</body>