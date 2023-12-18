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
        <a href="backsession.php">Back with Session</a>
        <a href="javascript:void(0);" class="icon" onclick="showMobileNav()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>    
    <script src="./main.js"></script>

</body>
</html>
<h1> Data Barang </h1></br>
<div class="margin">
<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="120">Kode Barang</th>
        <th width="350">Nama Barang</th>
        <th width="150">Harga</th>
        <th width="150">Tanggal</th>
        
    </tr>
    <?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while ($tampil = mysqli_fetch_array($ambildata)){
        $warna = ($no%2==1)?"grey":"black";
        echo "
        <tr bgcolor='$warna'>
        <td align='center'>$no</td>
        <td align='center'>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga_barang]</td>
        <td>$tampil[tanggal]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
</div>

<style>
    table{
        border-collapse: collapse;
        font-size:10pt;
        border:1px solid #cccccc;
    }
    td{
        padding:3px;
        height:25px;
    }
    th{
        background-color: steelblue;
        color:white;
        height:30px;
    }
</style>