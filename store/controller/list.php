<?php
header('Content-Type: application/json');
include "../config/conn.php";

$stmt = $db->prepare("SELECT id, nama_produk, kode_produk, harga FROM produk");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>