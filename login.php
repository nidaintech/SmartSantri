<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - SmartSantri</title>
  <link rel="stylesheet" href="auth.css" />
</head>
<body class="auth-body">

  <div class="auth-container">
    <h2>Masuk ke SmartSantri</h2>

    <!-- Langsung arahkan ke dashboard.html -->
 <form action="proses_login.php" method="POST" class="auth-form">
  <label>Email</label>
  <input type="email" name="email" required>

  <label>Password</label>
  <input type="password" name="password" required>

  <button type="submit" class="btn-primary full">Login</button>
</form>
    <p class="auth-switch">
      Belum punya akun?
      <a href="register.php">Daftar sekarang</a>
    </p>
  </div>

</body>
</html>

