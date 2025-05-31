<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Tiket Pesawat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e9f0f7;
      margin: 0;
      padding: 0;
    }
    .form-container {
      width: 400px;
      margin: 50px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #28a745;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Form Permintaan Tiket Pesawat</h2>
    <form action="save_pesawat.php" method="POST">
      <input type="text" name="nama" placeholder="Nama" required>
      <input type="text" name="no_ktp" placeholder="No KTP" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="no_hp" placeholder="No HP" required>
      <input type="text" name="pesawat_pergi" placeholder="Pesawat Pergi" required>
      <input type="text" name="pesawat_pulang" placeholder="Pesawat Pulang" required>
      <input type="text" name="no_projek" placeholder="No Projek" required>
      <button type="submit">Kirim Permintaan</button>
    </form>
  </div>
</body>
</html>
