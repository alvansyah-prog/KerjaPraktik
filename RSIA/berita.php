<!doctype html>


<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RSIA</title>
        <meta name="description" content="RSIA">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/img/RSIA/LOGO1.png" rel="icon">
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
              <a class="navbar-brand" href="./">RSIA</a>
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
                  <!-- <li class="">
                    <a href="daftar.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Daftar</a>
                  </li> -->
                  <li class="">
                    <a href="berita.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Berita</a>
                  </li>
                  <li class="">
                    <a href="praktik.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Jadwal praktek</a>
                  </li>
                  <li class="">
                    <a href="tanyajawab.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Tanya Jawab</a>
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
                            <h1>Tabel Berita</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="admin.php">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Tabel Beita</li>
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
                                  <strong class="card-title">Insert Tabel Berita</strong>
                            </div>
                            <div class="card-body card-block">
                              <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                <?php
                                $id = "";
                                $judul = "";
                                $ket = "";
                                $pengumum = "";
                              include 'koneksi.php';
                                if (isset($_GET['id_editberita']))
                                {
                                  $id_berita = $_GET['id_editberita'];
                                  $database = "SELECT id_berita, judul_berita, keterangan, pengumum FROM berita WHERE id_berita=$id_berita";
                                  $query = mysqli_query($kon,$database);
                                  while ($a = mysqli_fetch_array($query)) {
                                    $id = $a['id_berita'];
                                    $judul = $a['judul_berita'];
                                    $ket = $a['keterangan'];
                                    $pengumum = $a['pengumum'];

                                  }
                                }
                                ?>
                                <input type="text" name="id_update" value="<?php echo $id; ?>" hidden >
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="id_berita" class=" form-control-label">Id Berita</label></div>
                                    <div class="col col-sm-6">
                                      <input type="text" name="id_berita" value="<?php echo $id; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="judul_berita" class=" form-control-label">Judul Berita</label></div>
                                    <div class="col col-sm-6">
                                      <input type="text" name="judul_berita" value="<?php echo $judul; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="keterangan" class=" form-control-label">keterangan</label></div>
                                    <div class="col col-sm-6">
                                      <input type="text" name="keterangan" value="<?php echo $ket; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="pengumum" class=" form-control-label">Pengumum</label></div>
                                    <div class="col col-sm-6">
                                      <input type="text" name="pengumum" value="<?php echo $pengumum; ?>">
                                    </div>
                                </div>



                              <div class="card-footer">
                                <input type=submit class="btn btn-primary btn-sm" name="Input" value="Input">
                                <?php
                                include 'koneksi.php';
                                // Check If form submitted, insert form data into users table.
                                try {
                                if(isset($_POST['Input'])) {
                                  $id = $_POST['id_berita'];
                                  $judul = $_POST['judul_berita'];
                                  $ket = $_POST['keterangan'];
                                  $pengumum = $_POST['pengumum'];
                                if (!$kon){
                                  die("Koneksi database gagal:".mysqli_connect_error());
                                }
                                // Insert user data into table
                                $result = mysqli_query($kon, "INSERT INTO berita(id_berita,judul_berita,keterangan,pengumum) VALUES('$id','$judul','$ket','$pengumum')");
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
                                  $id_update = $_POST['id_berita'];
                                  $judul = $_POST['judul_berita'];
                                  $ket = $_POST['keterangan'];
                                  $pengumum = $_POST['pengumum'];


                                // Update user data into table
                                // $result = mysqli_query($kon, "UPDATE `dokter` SET `nama`='$nama' WHERE `id_dokter`=$id_update");
                                $result = mysqli_query($kon,"UPDATE `berita` SET `id_berita`='$id_update', `judul_berita`='$judul', `keterangan`='$ket', `pengumum`='$pengumum' WHERE `id_berita`='$id_update'");



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
                                      <th scope="col">Id Berita</th>
                                      <th scope="col">Judul Berita</th>
                                      <th scope="col">keterangan</th>
                                      <th scope="col">Pengumum</th>
                                      <th scope="col">Opsi</th>

                                    </tr>
                                  </thead>

                                  <?php
                                  include 'koneksi.php';
                                  $database = "SELECT * FROM berita  ";
                                  $query = mysqli_query($kon,$database);
                                  while ($a=mysqli_fetch_array($query)) {
                                  ?>

                                  <tbody>
                                    <tr>
                                      <td><?php echo $a['id_berita']; ?></td>
                                      <td><?php echo $a['judul_berita']; ?></td>
                                      <td><?php echo $a['keterangan']; ?></td>
                                      <td><?php echo $a['pengumum']; ?></td>
                                      <td>
                                        <a class="btn btn-primary btn-sm" href="?id_editberita=<?php echo $a['id_berita']; ?>">Edit</a>
                                        <?php
                                        echo '
                                        <a href="delete_berita.php?id_berita='.$a['id_berita'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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
