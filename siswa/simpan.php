<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $mata_diklat = $_POST['mata_diklat'];
    $sks    = $_POST['sks'];
    

    $sql="INSERT INTO mata_diklat SET mata_diklat='$mata_diklat', sks='$sks' ";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=mata_diklat=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>