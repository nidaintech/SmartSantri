<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - SmartSantri</title>
  <link rel="stylesheet" href="auth.css">
</head>
<body class="auth-body">

  <div class="auth-container">
    <h2>Buat Akun SmartSantri</h2>
    
    <form action="proses_register.php" method="POST" class="auth-form">
      
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="fullname" placeholder="Nama Anda" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="email@example.com" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Minimal 8 karakter" required>
      </div>

      <button type="submit" name="daftar" class="btn-primary full">DAFTAR SEKARANG</button>
    </form>

    <p class="auth-switch">
      Sudah punya akun?
      <a href="login.php">Login di sini</a>
    </p>
  </div>

</body>
</html>