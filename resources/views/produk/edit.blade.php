<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Menghubungkan CSS dari Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/formstyle.css') !!}">
    <title>Document</title>
</head>
<body>
    <!-- Bagian Header -->
    <header>
        <h1>Blue Store</h1>
    </header>
    <!-- Konten Utama -->
    <div class="container">
        <div class="container1">
            <!-- Judul halaman atau header konten utama -->
            <h1>Tambahkan Produk</h1>
        </div>
        <!-- Formulir untuk meng-Update data produk dengan tautan ke rute 'produk.update' -->
        <form method="post" action="{{ route('produk.update', ['produk' => $produk]) }}" class="row g-3">
            @csrf <!-- Menerapkan Perlindungan CSRF (Cross-Site Request Forgery) -->
            @method('put') <!-- Menggunakan metode HTTP 'PUT' untuk mengirimkan data formulir -->

            <!-- Kolom input untuk nama produk, dengan nilai awal diambil dari $produk->nama -->
            <div class="col-12">
                <label class="form-label">Nama</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama Produk" value="{{ $produk->nama }}"/>
            </div>

            <!-- Kolom input untuk nama artis, dengan nilai awal diambil dari $produk->artis -->
            <div class="col-md-6">
                <label class="form-label">Artis</label>
                <input class="form-control" type="text" name="artis" placeholder="Nama Artis" value="{{ $produk->artis }}"/>
            </div>
            
            <!-- Kolom input untuk kategori produk, dengan nilai awal diambil dari $produk->kategori -->
            <div class="col-md-6">
                <label class="form-label">Kategori</label>
                <input class="form-control" type="text" name="kategori" placeholder="Kategori" value="{{ $produk->kategori }}"/>
            </div>

            <!-- Kolom input untuk stok produk, dengan nilai awal diambil dari $produk->stok -->
            <div class="col-md-6">
                <label class="form-label">Stok</label>
                <input class="form-control" type="text" name="stok" placeholder="Stok" value="{{ $produk->stok }}"/>
            </div>

            <!-- Kolom input untuk harga produk, dengan nilai awal diambil dari $produk->harga -->
            <div class="col-md-6">
                <label >Harga</label>
                <input class="form-control" type="text" name="harga" placeholder="Harga" value="{{ $produk->harga }}"/>
            </div>
            
            <!-- Kolom input untuk deskripsi produk, dengan nilai awal diambil dari $produk->deskripsi -->
            <div class="col-12">
                <label class="form-label">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi Produk" value="{{ $produk->deskripsi }}"/>
            </div>
            <!-- Tombol untuk mengirimkan data produk yang akan diperbarui -->
            <div>
                <input class="btn-tambah" type="submit" value="Update Data Produk" />
            </div>
        </form>
    </div>
    
    <!-- Bagian Footer -->
    <footer>
        <p>&copy; Blue Store</p>
    </footer>
</body>
</html>
