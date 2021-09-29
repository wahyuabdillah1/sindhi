
  <!-- Main Footer -->
  <footer class="main-footer">
  <div class="container"> 
  <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="">Pusat Database</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url('assets/')?>plugins/jquery/jquery.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Datepicker -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">

<!-- DataTables -->
<script src="<?=base_url('assets/')?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- ChartJS -->
<script src="<?=base_url('assets/')?>plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE App -->
<script src="<?=base_url('assets/')?>dist/js/adminlte.min.js"></script>


<script>
$(document).ready(function() {
    $('.datepicker').datepicker({
      format: "yyyy-mm",
    startView: "months", 
    minViewMode: "months"
        //autoclose: true,
        //todayHighlight: true,
    });
});
</script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
    });
  });
</script>



</body>
</html>
