<!doctype html>


<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RSIA</title>
        <meta name="description" content="RSIA">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/Backend/css/normalize.css">
        <link rel="stylesheet" href="assets/Backend/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/Backend/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/Backend/css/themify-icons.css">
        <link rel="stylesheet" href="assets/Backend/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/Backend/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/Backend/css/lib/datatable/dataTables.bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/Backend/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>

    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
          <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="./">PSTBK</a>
              <a class="navbar-brand hidden" href="./"><img src="assets/img/RSIA/LOGO1.PNG" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="admin.php"> <i class="menu-icon "></i>HOME </a>
                </li>
                <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                  <li class="">
                    <a href="dokter.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Dokter</a>
                  </li>
                  <li class="">
                    <a href="daftar.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Daftar</a>
                  </li>
                  <li class="">
                    <a href="berita.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Berita</a>
                  </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <div class="dropdown for-message">
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <a class="dropdown-item media bg-flat-color-3" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="img/RSIA/LOGO1.PNG"></span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="assets/img/RSIA/LOGO1.PNG" alt="RSIA">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="login_admin.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-id"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language">
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-fr"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-it"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Tabel Dokter</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="admin.php">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Tabel Dokter</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                      <div class="col-lg">
                          <div class="card">
                            <div class="card-header">
                                  <strong class="card-title">Insert Tabel Dokter</strong>
                            </div>
                            <div class="card-body card-block">
                              <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                <?php
                                  $namap = "";
                                  $alamatp = "";
                                  $nop = "";
                                  include 'koneksi.php';
                                  if (isset($_GET['id_editdaftar'])) {
                                    $id_daftar = $_GET['id_editdaftar'];
                                    $c = "SELECT id_daftar, nama_pasien, alamat_pasien, no_pasien FROM daftar WHERE id_daftar = $id_daftar";
                                    $query = mysqli_query($kon, $c);
                                    while ($a = mysqli_fetch_array($query)) {

                                      $namap = $a['nama_pasien'];
                                      $alamatp = $a['alamat_pasien'];
                                      $nop = $a['no_pasien'];
                                    }
                                  }
                                 ?>
                                <input type="text" name="nama_pasien" value="<?php echo $namap; ?>" hidden >
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="nama_pasien" class=" form-control-label">Nama Pasien</label></div>
                                    <div class="col col-sm-6">
                                      <input class="form-control"  type="text" name="nama_pasien" value="<?php echo $namap; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="alamat_pasien" class=" form-control-label">Alamat Pasien</label></div>
                                    <div class="col col-sm-6">
                                      <input class="form-control" type="text" name="alamat_pasien" value="<?php echo $alamatp; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="no_pasien" class=" form-control-label">Nomor Handphone Pasien</label></div>
                                    <div class="col col-sm-6">
                                      <input class="form-control"  type="text" name="no_pasien" value="<?php echo $nop; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="pil_dokter" class=" form-control-label">Pilihan  Dokter : </label></div>
                                    <select class="form-control"  id="pil_dokter" name="pil_dokter" value="<?php echo $namad; ?>">
                                      <?php
                                      include'koneksi.php';

                                      $sql= mysqli_query($kon, "select nama_dokter from dokter");
                                      while ($data=mysqli_fetch_array($sql)) {
                                        ?>
                                        <option value="<?=$data['nama_dokter']?>"><?=$data['nama_dokter']?></option>
                                        <?php
                                      }
                                      ?>
                                    </select>

                                </div>



                              <div class="card-footer">
                                <input type=submit class="btn btn-primary btn-sm" name="Input" value="Input">
                                <?php
                                include 'koneksi.php';
                                // Check If form submitted, insert form data into users table.
                                try {

                                  if(isset($_POST['Input'])) {
                                    $nama = $_POST['nama_pasien'];
                                    $alamat = $_POST['alamat_pasien'];
                                    $nomor = $_POST['no_pasien'];
                                    $dokter = $_POST['pil_dokter'];


                                  $result = mysqli_query($kon, "INSERT INTO `daftar`( `nama_pasien`, `alamat_pasien`, `no_pasien`, `nama_dokter`) VALUES ('$nama','$alamat','$nomor','$dokter')");

                                  }

                                }
                                //catch exception
                                catch(Exception $e) {
                                  echo 'Message: ' .$e->getMessage();
                                }
                                ?>

                                <input type=submit class="btn btn-primary btn-sm" name="Update" value="Update">
                                  <?php
                                try {
                                  include 'koneksi.php';
                                if(isset($_POST['Update'])) {
                                  $id_update = $_POST['id_daftar'];

                                  $namap = $_POST['nama_pasien'];
                                  $alamatp = $_POST['alamat_pasien'];
                                  $nop = $_POST['no_pasien'];
                                  $namad = $_POST['nama_dokter'];

                                // Update user data into table
                                // $result = mysqli_query($kon, "UPDATE `dokter` SET `nama`='$nama' WHERE `id_dokter`=$id_update");
                                $result = mysqli_query($kon,"UPDATE `daftar` SET `id_daftar`='$id_update', `nama_pasien`='$namap', `alamat_pasien`='$alamatp', `no_pasien`='$nop',`nama_dokter`='$namad' WHERE `id_daftar`='$id_update'");



                                }
                                }

                                //catch exception
                                catch(Exception $e) {
                                  echo 'Message: ' .$e->getMessage();
                                }
                                ?>
                                </button>
                              </div>
                              </form>
                            </div>

                              <!-- table -->
                              <div class="card-body">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Id Daftar</th>
                                      <th scope="col">Nama pasien</th>
                                      <th scope="col">Alamat Pasien</th>
                                      <th scope="col">Nomor Pasien</th>
                                      <th scope="col">Nama Dokter</th>
                                      <th scope="col">Opsi</th>

                                    </tr>
                                  </thead>

                                  <?php
                                  include 'Koneksi.php';
                                  $database = "SELECT * FROM daftar  ";
                                  $query = mysqli_query($kon,$database);
                                  while ($a=mysqli_fetch_array($query)) {
                                  ?>

                                  <tbody>
                                    <tr>
                                      <td><?php echo $a['id_daftar']; ?></td>
                                      <td><?php echo $a['nama_pasien']; ?></td>
                                      <td><?php echo $a['alamat_pasien']; ?></td>
                                      <td><?php echo $a['no_pasien']; ?></td>
                                      <td><?php echo $a['nama_dokter']; ?></td>
                                      <td>
                                        <a class="btn btn-primary btn-sm" href="?id_editdaftar=<?php echo $a['id_daftar']; ?>">Edit</a>
                                        <?php
                                        echo '
                                        <a href="delete_daftar.php?id_daftar='.$a['id_daftar'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                                            '
                                        ?>
                                      </td>
                                    </tr>
                                  </tbody>
                                  <?php
                                          }
                                            ?>
                                </table>

                              </div>
                          </div>
                      </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


        <script src="assets/Backend/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/Backend/js/popper.min.js"></script>
        <script src="assets/Backend/js/plugins.js"></script>
        <script src="assets/Backend/js/main.js"></script>

        <script src="assets/Backend/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/pdfmake.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/Backend/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/Backend/js/lib/data-table/datatables-init.js"></script>


        <script type="text/javascript">
          $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
          });
        </script>

    </body>

</html>
