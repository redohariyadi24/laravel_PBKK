<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <!-- Style untuk seluruh halaman -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/registrasistyle.css') !!}">
</head>
<body>
    <div class="container">
        <!-- Judul dan subjudul -->
        <header>
            <h2>Sign In</h2>
            <h4>Daftar Akun Baru</h4>
        </header>
        
        <!-- Formulir Registrasi -->
        <form action="proses_registrasi.php" method="POST">
            <!-- Baris Pertama -->
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
            </div>
            
            <!-- Baris Kedua -->
            <div class="form-row">
                <div class="form-group">
                    <label for="birthdate">Tanggal Lahir:</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address" required>
                </div>
            </div>
            
            <!-- Baris Ketiga -->
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. HP:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>
            
            <!-- Baris Keempat (Password) -->
            <div class="form-row">
                <div class="form-group password-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group password-container">
                    <label for="confirm-password">Konfirmasi Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
            </div>
            
            <!-- Tombol Daftar -->
            <button type="submit" class="btn">Daftar</button>
        </form>
        
        <!-- Tautan untuk Masuk -->
        <p>Sudah punya akun? <a href="login">Masuk di sini</a></p>
    </div>
</body>
</html>
