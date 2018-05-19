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
	<?php
									$ID_SISWA=$_GET['ID_SISWA'];
									$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE ID_SISWA='$ID_SISWA'");
									$data  = mysqli_fetch_array($query);
									?>
      <!-- Default box -->
     <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Siswa</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Kenaikan X</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Kenaikan XI</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">kelulusan XII</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
					<div class="card">
            
           <form class="form-horizontal" role="form" action="update-go.php" method="POST" enctype="multipart/form-data">
		 <div class="box-body">


		<div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nis</label>
			<div class="col-md-8">
              <div class="col-md-10" hidden>
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="ID_SISWA" id="ID_SISWA" placeholder="Nis Siswa" type="text" value="<?php echo $data['ID_SISWA'];?>" required>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="col-md-10">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NIS" id="NIS" placeholder="Nis Siswa" type="text" value="<?php echo $data['NIS'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nama</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NAMA" id="NAMA" placeholder="Nama Siswa" type="text" value="<?php echo $data['NAMA'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Kelas X</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <select class="form-control" name="X" id="X">
          
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
              </div>

            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn btn-default" type="submit" name="submit">Update</button>
			  <button class="btn btn-danger"  type="submit">Cancel</button>
            </div>



          </div>
		  </div>
        </form>
            
            <!-- /.card-body -->
          </div>
					
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <form class="form-horizontal" role="form" action="input-s.php" method="POST" enctype="multipart/form-data">
		 <div class="box-body">


		<div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nis</label>
            <div class="col-md-8">
              <div class="col-md-10">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NIS" id="NIS" placeholder="Nis Siswa" type="text" value="<?php echo $data['NIS'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nama</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NAMA" id="NAMA" placeholder="Nama Siswa" type="text" value="<?php echo $data['NAMA'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Kelas XI</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <select class="form-control" name="ID_GELOMBANG" id="ID_GELOMBANG">
          
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
              </div>

            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn btn-default" type="submit" name="submit">Update</button>
			  <button class="btn btn-danger"  type="submit">Cancel</button>
            </div>



          </div>
		  </div>
        </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <form class="form-horizontal" role="form" action="input-s.php" method="POST" enctype="multipart/form-data">
		 <div class="box-body">


		<div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nis</label>
            <div class="col-md-8">
              <div class="col-md-10">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NIS" id="NIS" placeholder="Nis Siswa" type="text" value="<?php echo $data['NIS'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nama</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NAMA" id="NAMA" placeholder="Nama Siswa" type="text" value="<?php echo $data['NAMA'];?>" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Kelas XII</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <select class="form-control" name="ID_GELOMBANG" id="ID_GELOMBANG">
          
		<?php
		$query = mysqli_query($koneksi,"select * from view_lagi where ik='XII' ");
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
              </div>

            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn btn-default" type="submit" name="submit">Update</button>
			  <button class="btn btn-danger"  type="submit">Cancel</button>
            </div>



          </div>
		  </div>
        </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
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
