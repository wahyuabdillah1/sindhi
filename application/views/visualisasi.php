


<div class="wrapper">



  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <div class="content">
      <div class="container">
    
	<div class="row">
	

  <div class="card card-info">
  <div class="card-header">
  <h3 class="card-title">Cari Data</h3>
  <div class="card-tools ml-auto">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
</div>
  <div class="card-body">
  <form method="POST">
  <div class="form-group" style="max-width: 18rem;">
            <label for="item1">item1</label>
            <select class="form-control select2" id="category_name" name="item1">
   <?php foreach($visualisasi as $vis) : ?>
    <option value="<?php echo $vis->id;?>"> <?php echo $vis->name; ?></option>
   <?php endforeach; ?>
   </select>
          </div>

          <?php
echo var_dump($visualisasi);
          ?>

        
        <div class="form-group" style="max-width: 18rem;">
            <label>Resolusi</label>
                <select class="form-control" name="resolusi" id="resolusi">
                <option value="0">-Pilih-</option>
                            <?php foreach($resolusi as $row):?>
                                <option value="<?php echo $row->id;?>"><?php echo $row->resolution?></option>
                            <?php endforeach;?>
                </select>                   
         </div>

        <div class="form-group" style="max-width: 18rem;">
            <label for="item3">Statistik</label>
            <select name="statistik" class="form-control" id="statistik">
            <option value="0">-</option>
                            </select>

        </div>

         
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
        <script>
    $(document).ready(function(){
        $('#resolusi').change(function(){
            var id=$(this).val();
            $.ajax({
            type: "post",
            dataType: 'JSON',
            url: "<?php echo base_url(); ?>statistik/get_statistik",
            data:{
                'id':id,
            },
             //dataType: 'JSON',
             success:function(data)
            {
                //console.log(data);
                var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].statistics+'</option>';
                        }
                        $('#statistik').html(html);
            }

            });
            return false;
        });
    });
</script>



        
        <div class="form-group" style="max-width: 18rem;">
            <label>Model</label>
                <select class="form-control" name="model">
                   <option value="Tabel">Tabel</option>
                   <option value="Grafik">Grafik</option>
                </select> 
         </div>


        

        <div class="form-group">
            <label class="control-label">Time</label>
                <div class="form-inline">
                    <input name="time-awal" id="time-awal" class="form-control datepicker" type="text"> 
                    <span class="control-label">to</span>
                    <input name="time-akhir" id="datepicker" class="form-control datepicker" type="text">
                </div>

        </div>


        <input type="submit" name="proses" value="Proses" class="btn btn-primary float-right" formaction="<?=base_url('grafik');?>" >
        </form>



  </div>
</div>  
</div>
   </div>
		


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
