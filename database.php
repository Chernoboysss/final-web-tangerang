<?php 
include "tentang.php" ;

$servername = "localhost";
$database = "db_web_programming";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "Connected successfully";
// }
// Create connection

$nama = $_GET['nama'] ;
$subjek = $_GET['subjek'] ;
$email = $_GET['email'] ;
$phone = $_GET['phone'] ;
$kritik = $_GET['kritik'] ;

//Query input menginput data kedalam database
$sql="insert into kritik_saran(nama,subjek,email,nomor_telepon,kritik_saran) values
('$nama','$subjek','$email','$phone','$kritik')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($conn,$sql);

// tutup database
mysqli_close($conn);
?>

