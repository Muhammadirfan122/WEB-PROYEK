<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Monitoring</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f5f7;
      margin: 0;
      padding: 0;
    }
    .dashboard {
      max-width: 600px;
      margin: 80px auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 30px;
      text-align: center;
    }
    h1 {
      color: #333;
    }
    .user-role {
      font-size: 14px;
      color: #666;
    }
    .menu {
      margin-top: 30px;
    }
    .menu a {
      display: inline-block;
      padding: 12px 20px;
      margin: 10px;
      text-decoration: none;
      background-color: #007bff;
      color: white;
      border-radius: 6px;
      transition: 0.3s ease;
    }
    .menu a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1>Selamat datang, <?= $_SESSION['user']; ?></h1>
    <p class="user-role">(<?= ucfirst($_SESSION['role']); ?>)</p>
    <div class="menu">
      <a href="form_pesawat.php">✈️ Permintaan Tiket Pesawat</a>
      <a href="form_hotel.php">🏨 Booking Hotel</a>
    </div>
  </div>
</body>
</html>
