<?php
include "../conn.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php
  include "header.php";
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include "sidebar.php";
  ?>
  
  
									
									
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <form class="form-horizontal" role="form" action="tampil-xi.php" method="GET" >
		 <div class="box-body">
		  <div class="form-group">
		  <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          X
                        </span>
                      </div>
                      <select class="form-control col-md-8" name="x" id="x">
          
		<?php
		$query = mysqli_query($koneksi,"select * from view_lagi where ik='X' ");
		while($row = mysqli_fetch_assoc($query)){
		?>
		<option value="<?php echo $row ['n_kelas']; ?>">
		<?php echo $row ['n_kelas'];?>
		</option>

		<?php
		}
		?>
		</select>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">XI</span>
                      </div>
                      <select class="form-control col-md-8" name="xi" id="xi">
          
		<?php
		$query = mysqli_query($koneksi,"select * from view_lagi where ik='XI' ");
		while($row = mysqli_fetch_assoc($query)){
		?>
		<option value="<?php echo $row ['n_kelas']; ?>">
		<?php echo $row ['n_kelas'];?>
		</option>

		<?php
		}
		?>
		</select>
                    </div>
                    <!-- /input-group -->
                  </div>
				  <br/>
				  <br/>
				  
				   <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Th</span>
                      </div>
                      <select class="form-control col-md-8" name="ANGKATAN" id="ANGKATAN">
          
		<?php
		$query = mysqli_query($koneksi,"select distinct(angkatan) from siswa ");
		while($row = mysqli_fetch_assoc($query)){
		?>
		<option value="<?php echo $row ['angkatan']; ?>">
		<?php echo $row ['angkatan'];?>
		</option>

		<?php
		}
		?>
		</select>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
              </div>
            <div class="col-md-8">
              <div class="col-md-2">
                <div class="form-group internal">
                  
		
                </div>
              </div>

            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn btn-default" type="submit" >Submit</button>
			  <button class="btn btn-danger"  type="submit">Cancel</button>
            </div>



          </div>
		  </div>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "footer.php";
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
