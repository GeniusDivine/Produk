<?php
header('Content-Type: application/json');
include "../config/conn.php";


$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$kode_produk = $_POST['kode_produk'];
$harga = $_POST['harga'];

$stmt = $db->prepare("UPDATE produk SET nama_produk = ?, kode_produk = ?, harga  =  ? WHERE id = ?");
$result = $stmt -> execute([$nama_produk, $kode_produk, $harga, $id]);


echo json_encode([
    'success' => $result
]);
?>