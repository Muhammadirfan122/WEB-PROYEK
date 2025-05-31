<?php
session_start();
$conn = new mysqli("localhost", "root", "", "monitoring_proyek");

// Cek apakah form dikirim via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $role = isset($_POST['role']) ? $_POST['role'] : '';

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='$role'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $_SESSION['user'] = $email;
    $_SESSION['role'] = $role;
    header("Location: dashboard.php");
    exit();
  } else {
    echo "Login gagal";
  }
} else {
  echo "Akses tidak valid.";
}
?>
