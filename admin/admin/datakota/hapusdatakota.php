<?php
include '../../login/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $hasil = mysqli_fetch_array($file);

    $query = "DELETE FROM kota WHERE id_kota = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Data gagal dihapus." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='datakota.php';
              </script>";
    }
}
