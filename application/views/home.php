<div class="wrapper">
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <div class="content">
      <div class="container">
        <div class="row">
	
	
	<div class="col-lg-9">
            <div class="card card-success">
              <div class="card-header">
                <h5 class="card-title">Selamat Datang!</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"></h6>
                <p class="card-text">SINDHI Merupakan Sebuah Aplikasi Web Yang Menyediakan Informasi Data Hujan Historis Secara Lengkap dan Rinci.</p>
        
              </div>
            </div>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <p>Jumlah Stasiun</p>
              <?php foreach ($jml_stasiun as $jml) ?>
                <h3><?php echo $jml->id?> Stasiun</h3>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
            </div>
          </div>
		  
          <?php //var_dump($jml_stasiun);?>
		  
		  <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <p>Cakupan Data</p>
              <?php foreach ($cakupan_data as $range) ?>
                <h3><?php echo $range->tahun_awal?> s.d. <?php echo $range->tahun_akhir?></h3>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <p>Curah Hujan Tertinggi</p>
              <?php foreach ($rr_max as $r) ?>
                <h3><?php echo $r->ch_mm?> mm</h3>
              </div>
              <div class="icon">
                <i class="fas fa-cloud-rain"></i>
              </div>
            </div>
          </div>
		  
		
	</div>
</div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
