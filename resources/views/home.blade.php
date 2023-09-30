<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title -->
    <title>Halaman Beranda</title>
    
    <!-- Styles -->
    <style>
        /* Style untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: linear-gradient(to bottom, #FAF1E4, #9EB384);
            color: #435334;
            line-height: 1.6;
        }

        /* Style untuk header */
        header {
            background-color: #435334;
            color: #FAF1E4;
            padding: 10px 0;
            text-align: center;
        }

        /* Style untuk navbar */
        nav {
            background-color: #9EB384;
            color: #435334;
            text-align: center;
            padding: 1px;
        }

        /* Style untuk daftar menu navigasi */
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #435334;
            font-weight: bold;
            margin: 0 10px;
        }

        /* Style untuk bagian hero (selamat datang) */
        .hero {
            text-align: center;
            padding: 100px 0;
            background-color: rgb(250, 241, 228, 0.2);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #435334;
            color: #FAF1E4;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        /* Style untuk wadah konten utama */
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(to bottom, #CEDEBD, #9EB384);
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style untuk produk-produk unggulan */
        .featured-products {
            padding: 20px;
            text-align: center;
        }

        .featured-products h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .product {
            max-width: 800px;
            padding: 20px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 10px;
            background-color: rgb(243, 252, 234, 0.4);
            border-radius: 20px;
            display: inline-block;
            width: 25%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
        }

        /* Style untuk tombol "Beli" */
        .btn {
            background-color: #FAF1E4;
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

        /* Style untuk footer */
        footer {
            background-color: #435334;
            color: #CEDEBD;
            text-align: center;
            padding: 10px 0;
        }

        /* Style responsif untuk layar berukuran kecil (max-width: 768px) */
        @media screen and (max-width: 768px) {
            header {
                text-align: center;
            }

            nav ul {
                margin-top: 20px;
            }

            nav li {
                margin: 0 10px;
            }

            .hero {
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Blue Store</h1>
    </header>

    <!-- Navbar Section -->
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di Toko Online Kami</h1>
        <p>Temukan berbagai produk berkualitas dengan harga terbaik!</p>
        <a href="#" class="cta-button">Lihat Produk</a>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <div class="container">
            <div class="carousel">
                <h2>Produk Unggulan</h2>
                <!-- Produk 1 -->
                <div class="product">
                    <img src="product1.jpg" alt="Produk 1">
                    <h3>Produk 1</h3>
                    <p>Harga: $50.00</p>
                    <button class="btn">Beli</button>
                </div>
                <!-- Produk 2 -->
                <div class="product">
                    <img src="product2.jpg" alt="Produk 2">
                    <h3>Produk 2</h3>
                    <p>Harga: $60.00</p>
                    <button class="btn">Beli</button>
                </div>
                <!-- Produk 3 -->
                <div class="product">
                    <img src="product3.jpg" alt="Produk 3">
                    <h3>Produk 3</h3>
                    <p>Harga: $45.00</p>
                    <button class="btn">Beli</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2023 Toko Online Kami</p>
    </footer>
</