<?php
include "koneksi.php";
$username = $_GET['username'];
$query_delete = "DELETE FROM tb_user WHERE username = '$username';";
$hasil = mysqli_query($koneksi, $query_delete);

if ($hasil) {
    header('Location: admin/admin.php');
} else {
    echo 'gagal hapus';
}
?>
