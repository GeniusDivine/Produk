<?php
header('Content-Type: application/json');
include "../config/conn.php";

$nama_produk = $_POST['nama_produk'];
$kode_produk = $_POST['kode_produk'];
$harga = $_POST['harga'];

$stmt = $db->prepare("INSERT INTO produk (nama_produk, kode_produk, harga) 
                        VALUES (?, ?, ?)");
$result = $stmt->execute([ $nama_produk, $kode_produk, $harga]);

echo json_encode([
    'success' => $result
]);
?>