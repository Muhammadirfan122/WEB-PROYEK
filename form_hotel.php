<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan Hotel</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }
    .form-group input {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      transition: border 0.3s;
    }
    .form-group input:focus {
      border-color: #007bff;
      outline: none;
    }
    .submit-btn {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }
    .submit-btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <form action="save_hotel.php" method="POST" class="form-container">
    <h2>Form Permintaan Hotel</h2>

    <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
    </div>

    <div class="form-group">
      <label for="no_ktp">Nomor KTP</label>
      <input type="text" id="no_ktp" name="no_ktp" placeholder="Masukkan No KTP" required>
    </div>

    <div class="form-group">
      <label for="email">Alamat Email</label>
      <input type="email" id="email" name="email" placeholder="email@domain.com" required>
    </div>

    <div class="form-group">
      <label for="no_hp">Nomor HP</label>
      <input type="text" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" required>
    </div>

    <div class="form-group">
      <label for="hotel">Nama Hotel</label>
      <input type="text" id="hotel" name="hotel" placeholder="Contoh: Hotel Santika, Jakarta" required>
    </div>

    <div class="form-group">
      <label for="no_projek">Nomor Projek</label>
      <input type="text" id="no_projek" name="no_projek" placeholder="Masukkan nomor projek" required>
    </div>

    <button type="submit" class="submit-btn">Kirim Permintaan</button>
  </form>

</body>
</html>
