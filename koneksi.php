<?php  
$con = new mysqli('localhost', 'root','', 'e_absensi');

if (mysqli_connect_errno()) {
    echo"Failed connect to mysql: ".mysqli_error($con);
} 

?>

<!-- $sql1="select * from karyawan,jabatan, absensi where id ='$id'";
    $q1= mysqli_query($con,$sql1);
    $r1 = mysqli_fetch_array($q1); -->
