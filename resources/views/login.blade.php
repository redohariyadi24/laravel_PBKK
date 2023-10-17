<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Style untuk seluruh halaman -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/loginstyle.css') !!}">
</head>
<body>
    <div class="container">
        <!-- Judul dan subjudul -->
        <header>
            <h2>Log In</h2>
            <h4>Masuk ke Akun Anda</h4>
        </header>
        
        <!-- Form login -->
        <form action="home" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn"> Masuk</button>
        </form>
        
        <!-- Tautan untuk mendaftar -->
        <p>Belum punya akun? <a href="registration">Daftar di sini</a></p>
    </div>
</body>
</html>
