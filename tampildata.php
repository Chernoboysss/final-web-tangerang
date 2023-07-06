<?php
include 'header_footer/header.php' ;
?>


<?php
$host="localhost";
$user="root";
$password="";
$db="db_web_programming";

$kon = mysqli_connect($host,$user,$password,$db);
$sql="select * from kritik_saran";

$result = $kon->query($sql);


// Memeriksa hasil kueri
if ($result->num_rows > 0) {
    echo "<h1 class='text-center font-weight-bold mt-5 mb-5' style='font-size:24px ;'>KRITIK DAN SARAN</h1> ";
    echo "<table class='table table-hover text-center mb-5 '>";
    echo "<th scope='col>No</th>";
    echo "<th scope='col>Nomor</th>";
    echo "<th scope='col'>Nama</th>";
    echo "<th scope='col'>Subjek</th>";
    echo "<th scope='col'>Email</th>";
    echo "<th scope='col'>nomor telepon</th>";
    echo "<th scope='col'>kritik dan saran</th>";

    // Menampilkan data
    $x = 1 ;
    while ($row = $result->fetch_assoc()) {
        // Menambahkan baris baru ke tabel
        echo "<tr>";
        echo "<td>" . $x . "</td>";
        echo "<td>" . $row["Nama"] . "</td>";
        echo "<td>" . $row["Subjek"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Nomor_telepon"] . "</td>";
        echo "<td>" . $row["kritik_saran"] . "</td>";
        echo "</tr>";

        $x ++ ;
    }

    // Menutup tabel
    echo "</table>";
} else {
    echo "Tidak ada hasil.";
}

// Menutup koneksi
$kon->close();


include 'header_footer/footer.php' ;
?>


        