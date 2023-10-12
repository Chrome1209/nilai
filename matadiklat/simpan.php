<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $matadiklat = $_POST['matadiklat'];
    $sks    = $_POST['sks'];

    $sql="INSERT INTO matadiklat SET matadiklat='$matadiklat', sks='$sks' ";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=matadiklat=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>