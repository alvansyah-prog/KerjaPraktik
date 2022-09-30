<!-- ======= antrian Section ======= -->
<section id="antrian" class="cta">
  <div class="container">
    <div class="row" data-aos="zoom-out">
      <div class="col-lg-9 text-center text-lg-start">
        <h3>Daftar</h3>
        <p> Ambil Nomor Antrian </p>
      </div>

      <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
          <label style="color:White;">Nama : </label>
          <input type="text" name="nama" id="nama"class="form-control" value="">
        </div>
        <div class="form-group">
          <label style="color:White;">Alamat : </label>
          <input type="text" name="alamat" id="alamat"class="form-control" value="">
        </div>
        <div class="form-group">
          <label style="color:White;">No.Handphone : </label>
          <input type="text" name="nomor" id="nomor"class="form-control" value="">
        </div>


          <div class="form-group">
            <label style="color:White;">Pilihan Dokter : </label>
            <select class="form-control"  id="dokter" name="dokter">
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

            <div class="container">
              <div class="row">
                <div class="col cta-btn-container text-center">
                  <input type=submit class="cta-btn align-middle" name="input" value="Ambil">
                  <button type="button" class="cta-btn align-middle" name="button">  <a href="lihatantrian.php" style="color:white;" type="submit">Lihat Antrian</a></button>
                </div>


                  <!-- <a class="cta-btn align-middle" type="submit" Name="Input" href="#">Ambil</a> -->
                    <?php
                    if(isset($_POST['input'])) {
                      $nama = $_POST['nama'];
                      $alamat = $_POST['alamat'];
                      $nomor = $_POST['nomor'];
                      $dokter = $_POST['dokter'];


                    $result = mysqli_query($kon, "INSERT INTO `daftar`( `nama_pasien`, `alamat_pasien`, `no_pasien`, `nama_dokter`) VALUES ('$nama','$alamat','$nomor','$dokter')");
                    if ($result){

                      echo "<SCRIPT>alert('Pendaftaran Berhasil, silahkan menghubungi petugas untuk informasi selanjutnya...');window.location='index.php'</SCRIPT>";
                    }
                    }
                    ?>
                </div>
              </div>
            </div>

            <form class="container" action="lihatantrian.php" method="post">


            </form>






            <label for="" style="color:#B3B6B7 ;">*Ket : Untuk Memilih dokter dan spesialis harap dilihat di daftar dokter.</label>
          </div>
          </div>
      </form>

      </div>
    </div>

  </div>
</section><!-- End antrian Section -->



<?php
include 'koneksi.php';
  $select = mysqli_query($kon,"SELECT * FROM dokter");
  while ($a = mysqli_fetch_array($select)) {
    ?>
    <div class="row">
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-info">
            <h4><?php echo $a['nama_dokter']; ?></h4>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>


  <?php
  $idp = "";
  $idd = "";
  $hari = "";
  $jam = "";
include 'koneksi.php';
  if (isset($_GET['id_editpraktek'])) {
    $id_praktik = $_GET['id_editpraktek'];
    $database = "SELECT  id_praktik, id_dokter, hari, jam FROM praktik WHERE id_praktik = $id_praktik";
    $query = mysqli_query($kon,$database);
    while ($a = mysqli_fetch_array($query)) {
      $idp = $a['id_praktik'];
      $idd = $a['id_dokter'];
      $hari = $a['hari'];
      $jam = $a['jam'];
    }
  }
  ?>



  <?php
  include 'koneksi.php';
    $select = mysqli_query($kon,"SELECT d.id_dokter, d.nama_dokter, d.tipedokter p.hari, p.jam FROM dokter d INNER JOIN praktik p ON d.id_dokter=p.id_dokter");
    while ($a = mysqli_fetch_array($select)) {
      ?>
      <div class="col">
        <div class="row d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-info">
              <h4><?php echo $a['nama_dokter']; ?></h4>
              <p><?php echo $a['hari']." ".$a['jam'] ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
