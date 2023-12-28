<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
<?php
include "koneksi.php";
$sql=mysqli_query($con,"select * from absensi where id_absensi='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Isi Absen </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id absensi </td>
        <td> <input type="text" name="id_absensi" value="<?php echo $data['id_absensi']; ?>"> </td>
    </tr>
    <tr>
        <td> waktu masuk </td>
        <td> <input type="text" name="waktu_masuk" value="<?php echo date($data['waktu_masuk']); ?>"> </td>
    </tr>
    <tr>
        <td> status absensi </td>
        <td> <input type="text" name="status_absensi" value="<?php echo $data['status_absensi']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Update"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($con, "update absensi set  
id_absensi = '$_POST[id_absensi]',
waktu_masuk = '$_POST[waktu_masuk]',
status_absensi = '$_POST[status_absensi]'
where id_absensi = '$_GET[kode]'");

echo "Your absen is updated";
echo "<meta http-equiv=refresh content=1;URL='edit.php'>";

}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>