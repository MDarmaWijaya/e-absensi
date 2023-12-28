<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container  edit">

      <h3><a class="nav-link" href="index.php">Data Absen</a></h3>
      
      <table class="table table-striped">
          <thead>
          <tr>
              <th>NO</th>
              <th>Name</th>
              <th>Your Id</th>
              <th>Time Date</th>
              <th>Presensi</th>
              <th colspan="2">Action</th>
          </tr>
          <?php  
          include "koneksi.php";
      
          $no=1;
          $ambildata = mysqli_query($con, "select * from absensi, karyawan where absensi.id_karyawan = karyawan.id_karyawan");
          while ($tampil = mysqli_fetch_array($ambildata)) {
              echo"
              <tr>
              <td>$no</td>
              <td>$tampil[nama]</td>
              <td>$tampil[id_absensi]</td>
              <td>$tampil[waktu_masuk]</td>
              <td>$tampil[status_absensi]</td>
              <td><a href='edit-absen.php?kode=$tampil[id_absensi]'>Ubah</a></td>
              </tr>
              ";
              $no++;
          }
      
          ?>
          </thead>
      </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
