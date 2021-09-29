

<div class="container">
<div class="row">
<div class="card" style="width: 100rem;">
      <?php
      $item1=[''];
      $id_stasiun= $_POST ['item1'];
      //echo 'Var Dump ='. $id_stasiun.',';
      $resolusi= $_POST ['resolusi'];
      //echo $resolusi;
      $statistik=$_POST['statistik'];
      //echo $statistik;
      $tampil=$_POST ['model'];

      $time_awal = $_POST ['time-awal'];
      //echo $time_awal;
      $time_akhir = $_POST ['time-akhir'];
      //echo $time_akhir;

//---tampilkan tabel data harian---//

if ($tampil=='Tabel' && $resolusi=='1'){
    //echo 'Tabel gan';
    $caridata = $this->db->query("select b.id, b.name, a.data_timestamp, a.rainfall_day_mm from tb_daily_rainfall a join tb_station b on a.station_id=b.id where station_id='$id_stasiun' and data_timestamp between '$time_awal-01' and '$time_akhir-31'");
    $dataharian = $caridata->result_array();
    //var_dump($dataharian);
?>
    <div class="card card-success">
    <div class="card-header">
            <h6 class="m-0 font-weight-bold text-white" >Data Curah Hujan Harian</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="example2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Stasiun</th>
                            <th>Nama</th>
                            <th>Data Timestamp</th>
                            <th>Curah Hujan (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($dataharian as $p) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['id']; ?></td>
                                <td><?= $p['name']; ?></td>
                                <td><?= $p['data_timestamp']; ?></td>
                                <td><?= $p['rainfall_day_mm']; ?></td>
                            </tr>
                       <?php }?>
                    </tbody>
                 </table>
             </div>
      </div>
            <?php
}

//---tampilkan tabel data bulanan---//

else if($tampil=='Tabel' && $resolusi=='2'){

    $caridata = $this->db->query("select station_id, station_name, data_timestamp, rainfall_1mn_total_mm from v_monthly_rainfall where station_id='$id_stasiun' and  data_timestamp between '$time_awal' and '$time_akhir-31'");
    $databulanan = $caridata->result_array();
    var_dump($databulanan);
    ?>
 <div class="card card-success">
    <div class="card-header">
            <h6 class="m-0 font-weight-bold text-white" >Data Curah hujan Bulanan</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="example2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Stasiun</th>
                            <th>Nama</th>
                            <th>Data Timestamp</th>
                            <th>Curah Hujan (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($databulanan as $p) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['station_id']; ?></td>
                                <td><?= $p['station_name']; ?></td>
                                <td><?= $p['data_timestamp']; ?></td>
                                <td><?= $p['rainfall_1mn_total_mm']; ?></td>
                            </tr>
                       <?php }?>
                    </tbody>
                 </table>
             </div>
            </div>
           
<?php
}

//---tampilkan grafik data bulanan---//

else if($tampil=='Grafik' && $resolusi=='2'){
if($statistik =='1'){
    $caridata = $this->db->query("select data_timestamp, station_name, rainfall_1mn_total_mm as rainfall_result from v_monthly_rainfall where station_id='$id_stasiun' and data_timestamp between '$time_awal' and '$time_akhir-31'");
    $datagrafiktotal = $caridata->result();
    }
        else if ($statistik =='2'){
            $caridata = $this->db->query("select data_timestamp, station_name, rainfall_1mn_max_mm as rainfall_result from v_monthly_rainfall where station_id='$id_stasiun' and data_timestamp between '$time_awal' and '$time_akhir-31'");
            $datagrafiktotal = $caridata->result();
        }
    //var_dump($datagrafiktotal);
    ?>


            <!-- LINE CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Curah Hujan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 500px; max-width: 100%;"></canvas>
                </div>
              </div>
</div>
              <!-- /.card-body -->
    
                
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
    
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
type: 'line',
data: {
labels: 
[
        <?php
        if (count($datagrafiktotal)>0)
        {
            foreach ($datagrafiktotal as $time)
                {
                echo "'" .$time->data_timestamp."',";
                }
        }
        ?>
],
datasets: 
        [{
            label: 'Curah Hujan (mm)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
           // pointRadius         : true,
            pointColor          : '#3b8bba',
            fill               : false,
            //tension: 0.1

            data: [
                <?php
                    if (count($datagrafiktotal)>0) 
                    {
                        foreach ($datagrafiktotal as $data) 
                            {
                                echo "'" .$data->rainfall_result."',";
                            }
                    }
                ?>

                ]
        }]
    },
})

</script>
<?php
}

?>




      </div>
      
</div>



<?php //var_dump($visualisasi);?>
    </div>