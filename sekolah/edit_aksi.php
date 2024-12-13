<?php

include 'koneksi.php';

// Mengambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nim'];
$alamat = $_POST['alamat'];

// Melakukan query update
$query = "UPDATE siswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id='$id'";
mysqli_query($koneksi, $query);

// Mengalihkan ke halaman index.php
header("Location: index.php");

?>