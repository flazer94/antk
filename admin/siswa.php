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
     <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Siswa</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Data Siswa</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Input Siswa</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Mutasi</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
					<div class="card">
            
            <!-- /.card-header -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>Aksi</th>
                  <th>No</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>kelas X</th>
                  <th>Daftar Ulang X</th>
				  <th>kelas XI</th>
                  <th>Daftar Ulang XI</th>
				  <th>XII</th>
				  <th>Status Siswa</th>
                </tr>
                </thead>
                <tbody>
				<?php
									$no_urut = 0;
									//$result = mysqli_query($koneksi, "SELECT *,(CONCAT_WS(left(nama,1),right(nama,1),LEFT(NISN,3),ID_CALON)) as no_reg FROM calon");
									$result = mysqli_query($koneksi, "SELECT * FROM siswa order by id_siswa");
									while ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)){
									?>
                <tr>
				<td>
				  <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="edit-data.php?ID_SISWA=<?php echo $data['ID_SISWA'];?>">Edit Informasi</a></li>
						  <li><a class="dropdown-item" href="hapus-data.php?ID_SISWA=<?php $data['ID_SISWA'];?>">Hapus Data</a></li>
                        </ul>
                      </div>
				  </td>
					<td><?php echo $data['ID_SISWA'];?></td>
                  <td><?php echo $data['NIS'];?></td>
                  <td><?php echo $data['NAMA'];?></td>
                  <td><?php echo $data['X'];?></td>
                  <td><?php echo $data['X_REGIS'];?></td>
                  <td><?php echo $data['XI'];?></td>
				  <td><?php echo $data['XI_REGIS'];?></td>
				  <td><?php echo $data['XII'];?></td>
				  <td><?php echo $data['STATUS'];?></td>
                </tr>
				<?php
									}
				?>
                </tbody>
                <tfoot>
                <tr>
				  <th>Aksi</th>
                  <th>No</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>kelas X</th>
                  <th>Daftar Ulang X</th>
				  <th>kelas XI</th>
                  <th>Daftar Ulang XI</th>
				  <th>XII</th>
				  <th>Status Siswa</th>
                </tr>
                </tfoot>
              </table>
            
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
                  <input class="form-control col-md-8" name="NIS" id="NIS" placeholder="Nis Siswa" type="text" required>
                </div>
              </div>

            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Nama</label>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group internal">
                  <input class="form-control col-md-8" name="NAMA" id="NAMA" placeholder="Nama Siswa" type="text" required>
                </div>
              </div>

            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn btn-default" type="submit" name="submit">Submit</button>
			  <button class="btn btn-danger"  type="submit">Cancel</button>
            </div>



          </div>
		  </div>
        </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
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
