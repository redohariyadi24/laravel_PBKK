<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title -->
    <title>Halaman Beranda</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
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
</body>