<?php
$conn = new mysqli("localhost", "root", "", "monitoring_proyek");

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
