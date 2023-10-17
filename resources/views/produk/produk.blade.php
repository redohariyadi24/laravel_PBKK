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
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/tablestyle.css') !!}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Blue Store</h1>
    </header>
    <!-- Konten Utama -->
    <div class="container">
        <!-- Judul halaman atau header konten utama --> 
        <h1>Data Produk</h1>
        <div class="container1">
            <!-- Tombol untuk menambahkan produk dengan tautan ke rute 'produk.tambah' -->
            <a class="btn-tambah" href="{{ route('produk.tambah') }}">Tambah Produk</a>
            <div class="message">
                <!-- Menampilkan pesan sukses jika berhasil meng-Update data -->
                @if(session()->has('success'))
                    {{ session('success') }}
                @endif
            </div>
        </div>
        <!-- Tabel yang menampilkan daftar produk -->
        <table class="table table-light table-striped-columns">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Artis</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <!-- Melakukan perulangan untuk menampilkan setiap produk dalam variabel $produks -->
            @foreach ($produks as $produk) 
                <tr>
                    <!-- Kolom untuk menampilkan ID produk -->
                    <td>{{ $produk->id }}</td>
                    <!-- Kolom untuk menampilkan nama produk -->
                    <td>{{ $produk->nama }}</td>
                    <!-- Kolom untuk menampilkan nama artis -->
                    <td>{{ $produk->artis }}</td>
                    <!-- Kolom untuk menampilkan kategori produk -->
                    <td>{{ $produk->kategori }}</td>
                    <!-- Kolom untuk menampilkan stok produk -->
                    <td>{{ $produk->stok }}</td>
                    <!-- Kolom untuk menampilkan harga produk dengan format mata uang -->
                    <td class="special">Rp. {{ number_format($produk->harga, 2, ',', '.') }}</td>
                    <!-- Kolom untuk menampilkan deskripsi produk -->
                    <td>{{ $produk->deskripsi }}</td>
                    <td class="center">
                        <!-- Membuat tombol yang berisi Tautan untuk mengedit produk dengan menggunakan rute 'produk.edit' -->
                        <a href="{{ route('produk.edit', ['produk' => $produk]) }}" class="btn-edit">Edit</a>
                    </td>
                    <td class="center">
                        <!-- Membuat tombol yang berupa formulir untuk menghapus produk -->
                        <form method="post" action="{{ route('produk.hapus', ['produk' => $produk]) }}">
                            @csrf  <!-- Menerapkan Perlindungan CSRF (Cross-Site Request Forgery) -->
                            @method('delete') <!-- Menggunakan metode HTTP 'DELETE' untuk menghapus produk -->
                            <!-- Tombol untuk mengirimkan permintaan penghapusan -->
                            <input class="btn" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <!-- Footer Section -->
    <footer>
        <p>&copy; Blue Store</p>
    </footer>
</body>
</html>