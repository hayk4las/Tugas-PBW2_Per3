<?php
include "database.php";
$db = new Database();

$aksi = $_GET["aksi"]; 

//Proses Tambah data
if ($aksi == "tambah")
{
    $db->tambahData($_POST['nama'],$_POST['alamat'],$_POST['no_hp'], $_POST['jenis_kelamin']);
    header("location:index.php?alert=added");
}

//proses Update data
elseif($aksi == "update")
{
    $db->updateData($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['no_hp'], $_POST['jenis_kelamin']);
    header("location:index.php?alert=updated");
}

//Proses Hapus data
elseif($aksi == "hapus")
{
    $db->hapusData($_GET['id']);
    header("location:index.php?alert=delete");
}
?>