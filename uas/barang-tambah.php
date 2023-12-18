<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses data formulir di sini

    // Setelah proses selesai, arahkan ke halaman lain
    header("Location: barang-data.php");
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>✨ Halaman Input Barang ✨</title>
    
    <link rel="stylesheet" href="./styles.css"/>
</head>
<body>
    <!-- navbar auto responsive -->
    <nav id="navbar" class="navibar">
        <a href="#home" class="active">Home</a>
        <a href="https://www.itera.ac.id/">Campus</a>
        <a href="https://instagram.com/faturarkansy">My Social Media</a>
        <a href="http://localhost/uas/barang-data.php?kode=0">Output Page</a>
        <a href="http://localhost/uas/barang-data.php?kode=0">Cookie</a>
        <a href="javascript:void(0);" class="icon" onclick="showMobileNav()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>    
    <script src="./main.js"></script>

</body>
</html>


<form action="" method="post">
<h1> Halaman Input Barang </h1>
<div class="margin">
    <table>
        <tr>
            <td width="130"> Kode Barang </td> 
            <td><input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" pattern="^([1-9])[0-9]{4}$" required/></td>
        </tr>
        <tr>
            <td> Nama Barang </td>
            <td><input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" required/></td>
        </tr>
        <tr>
            <td> Harga Barang </td>
            <td><input type="text" name="harga_barang" placeholder="Masukkan Harga Barang" required/></td>
        </tr>
        <tr>
            <td> Tanggal </td>
            <td><input type="date" name="tanggal" placeholder="Masukkan Tanggal" required/></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</div>
<p>Untuk Kode Barang wajib diisi dengan angka sebanyak 5 digit</p>
</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]',
    tanggal = '$_POST[tanggal]'");

    echo '<script>
    alert("Input berhasil!");
    </script>';
    
}
?>