<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
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
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/Backend/scss/style.css">
  <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
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

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>HOME</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li> <a href="login_admin.php">Kembali ke Halaman Utama</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalSmartphone" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel">Daftar Dokter </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body modal-lg" >
            <!-- Ini isinya modul pop up-->
            <div class="card-body" >
              <table class="table table-sm">
                <thead>
                  <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Dokter</th>
                    <th scope="col">nama_dokter</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'koneksi.php';
      						$sql="select * from dokter ";
      						$result=mysqli_query($kon, $sql);

      						$no=1;
      						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tr><td>$a[id_dokter]</td><td>$a[nama_dokter]</td></tr>";
                     $no++;
      						}
                  echo "</tbody></table>";
      						?>
            </div>
            <!-- <p>There are three species of zebras.</p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
          </div>
        </div>
      </div>
    </div>



    <div class="content mt-3">

      <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Berhasil</span> Anda Berhasil Login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>


      <div  class="col-sm-6 ">
        <div class="card text-white bg-flat-color-1">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">

              </button>
            </div>
            <?php
                  include 'koneksi.php';
                  $sql= "select *  from daftar ";
                  $result= mysqli_query($kon, $sql);
                  $countdaging=mysqli_num_rows($result);
                             ?>
            <h4 class="mb-0">
              <span class="count"><?php echo $countdaging; ?></span>
            </h4>
            <p class="text-light">Daftar Dokter</p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSmartphone">Detail </button>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <!-- <canvas id="widgetChart1"></canvas> -->
            </div>

          </div>

        </div>
      </div>


      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <canvas id="widgetChart2"></canvas>
            </div>

          </div>
        </div>
      </div> -->
      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

          </div>

          <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
          </div>
        </div>
      </div> -->
      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
              <canvas id="widgetChart4"></canvas>
            </div>

          </div>
        </div>
      </div> -->
      <!--/.col-->



      <!-- GRAFIK BATANG-->
      <!-- <script type="text/javascript" src="js/Chart.js"></script>
      <?php
      include 'connect.php';
      ?>

      <div style="width: 800px;margin: 0px auto;">
        <canvas id="chartSDiagram"></canvas>
      </div>

      <br>
      <br>

      <script>
      var ctx = document.getElementById("chartSDiagram").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Diagram Batang Diabetes"],
          datasets: [
            {
            label: 'Diabetes',
            data: [


                    <?php
                    include 'connect.php';
                    $sql="select sum(Diabetes) as sum from diabetes where Diabetes = 1";
                    $result=mysqli_query($conn, $sql);


                    while ($a=mysqli_fetch_assoc($result)){
                    $output = $a['sum'];
                    echo "$output";

                    }

                     ?>
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
          },

          {
          label: 'Non Diabetes',
          data: [
            <?php
            include 'connect.php';
            $sql="select count(Diabetes) as sum from diabetes where Diabetes = 0";
            $result=mysqli_query($conn, $sql);


            while ($a=mysqli_fetch_assoc($result)){
            $output = $a['sum'];
            echo "$output";

            }
             ?>
          ],
          backgroundColor: [
            'rgba(245, 176, 65, 0.2)'
          ],
          borderColor: [
            'rgba(245, 176, 65, 1)'
          ],
          borderWidth: 1
          }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
      </script>
      <!-- GRAFIK -->

      <!-- DIAGRAM PIE -->
      <!-- <div style="width: 800px;margin: 0px auto;">
        <canvas id="chartPieDiabetes"></canvas>
        <center><p>Diagram Diabetes</p></center>
      </div>

      <br>
      <br>

      <script>
      var ctx = document.getElementById("chartPieDiabetes").getContext('2d');
      var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Diabetes", "NON Diabetes"],
        datasets: [{
          backgroundColor: [

            "#e74c3c",
            "#34495e"
          ],
          data: [

          <?php
          include 'connect.php';
          $sql="select count(Diabetes) as sum from diabetes where Diabetes = 1";
          $result=mysqli_query($conn, $sql);


          while ($a=mysqli_fetch_assoc($result)){
          $output = $a['sum'];
          echo "$output";

          } ?>,
          <?php
          include 'connect.php';
          $sql="select count(Diabetes) as sum from diabetes where Diabetes = 0";
          $result=mysqli_query($conn, $sql);


          while ($a=mysqli_fetch_assoc($result)){
          $output = $a['sum'];
          echo "$output";

          } ?>
          ]
        }]
      }
      });
      </script>  -->
      <!-- GRAFIK -->

    </div> <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <script src="assets/Backend/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="assets/Backend/js/plugins.js"></script>
  <script src="assets/Backend/js/main.js"></script>


  <script src="assets/Backend/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="assets/Backend/js/dashboard.js"></script>
  <script src="assets/Backend/js/widgets.js"></script>
  <script src="assets/Backend/js/lib/vector-map/jquery.vmap.js"></script>
  <script src="assets/Backend/js/lib/vector-map/jquery.vmap.min.js"></script>
  <script src="assets/Backend/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
  <script src="assets/Backend/js/lib/vector-map/country/jquery.vmap.world.js"></script>
  <script>
    (function($) {
      "use strict";

      jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    })(jQuery);
  </script>

</body>

</html>
