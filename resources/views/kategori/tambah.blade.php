<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Menghubungkan CSS dari Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/formstyle.css') !!}">
</head>
<body>
    <!-- Bagian Header -->
    <header>
        <h1>Blue Store</h1>
    </header>
    <!-- Konten Utama -->
    <div class="container"> 
        <!-- Judul halaman atau header konten utama -->
        <h1>Tambahkan Kategori</h1>
        <!-- Formulir untuk menambahkan produk dengan tautan ke rute 'produk.simpan' -->
        <form method="post" action="{{ route('kategori.simpan') }}" class="row g-3">
            @csrf  <!-- Menerapkan Perlindungan CSRF (Cross-Site Request Forgery) -->
            @method('post') <!-- Menggunakan metode HTTP 'POST' untuk mengirimkan data formulir -->
            
            <!-- Kolom input untuk nama produk -->
            <div class="col-12">
                <label class="form-label">Kategori</label>
                <input class="form-control" type="text" name="nama_kategori" placeholder="Nama Kategori" />
            </div>

            <div>
                <!-- Tombol untuk mengirimkan data produk yang akan disimpan -->
                <input class="btn-tambah" type="submit" value="Simpan Data Produk" />
            </div>
        </form>
    </div>
    <!-- Footer Section -->
    <footer>
        <p>&copy; Blue Store</p>
    </footer>
</body>
</html>