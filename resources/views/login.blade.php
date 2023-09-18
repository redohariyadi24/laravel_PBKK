<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
    
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

    .container {
        background-color: rgba(255, 255, 255, 0.6);
        padding: 30px;
        width: 400px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    header{
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    h2 {
        font-size: 27px;
        margin: 0px;
    }

    h4 {
        font-weight: lighter;
        margin: 0px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        font-weight: bold;
        align-self: flex-start;
    }
    

    input {
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #435334;
        background-color: rgb(206, 222, 189, 0.6);
    }

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

    .btn:hover {
        background-color: #435334;
        color: #CEDEBD;
    }

    p {
        margin-top: 20px;
    }

    a {
        text-decoration: none;
        color: #016A70;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    </style>
</head>
<body>
    <div class="container">
        <header>
        <h2>Log In</h2>
        <h4>Masuk ke Akun Anda</h4>
        </header>
        <form action="proses_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Masuk</button>
        </form>
        <p>Belum punya akun? <a href="registration">Daftar di sini</a></p>
    </div>
</body>
</html>
