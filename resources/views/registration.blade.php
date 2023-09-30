<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        /* Style untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #FAF1E4, #9EB384);
            color: #435334;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style untuk wadah konten */
        .container {
            background-color: rgba(255, 255, 255, 0.6);
            padding: 30px;
            width: 400px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Style untuk header */
        header{
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        /* Style untuk judul */
        h2 {
            font-size: 27px;
            margin: 0px;
        }

        /* Style untuk subjudul */
        h4 {
            font-weight: lighter;
            margin: 0px;
        }

        /* Style untuk baris formulir */
        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        /* Style untuk kelompok elemen formulir */
        .form-group {
            flex: 1;
            margin-right: 10px;
            text-align: left;
        }

        /* Style untuk label */
        label {
            font-weight: bold;
            margin-bottom: 10px;
            align-self: flex-start;
        }
        

        /* Style untuk input fields */
        input {   
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #435334;
            background-color: rgb(206, 222, 189, 0.6);
        }

        /* Style untuk tombol Daftar */
        .btn {
            background-color: #CEDEBD;
            color: #435334;
            font-size: 15px;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Style hover untuk tombol Daftar */
        .btn:hover {
            background-color: #435334;
            color: #CEDEBD;
        }

        /* Style untuk pesan "Sudah punya akun?" */
        p {
            margin-top: 20px;
        }

        /* Style untuk tautan Masuk */
        a {
            text-decoration: none;
            color: #016A70;
            font-weight: bold;
        }

        /* Style hover untuk tautan Masuk */
        a:hover {
            text-decoration: underline;
        }

    </style>
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
