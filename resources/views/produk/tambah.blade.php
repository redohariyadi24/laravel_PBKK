<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/formstyle.css') !!}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Blue Store</h1>
    </header>
    
    <div class="container">
        <div class="container1">
        <h1>Tambahkan Produk</h1>
        </div>

        <form method="post" action="{{ route('produk.simpan') }}" class="row g-3">
            @csrf
            @method('post') 
            <div class="col-12">
                <label class="form-label">Nama</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama Produk" />
            </div>
            <div class="col-md-6">
                <label class="form-label">Artis</label>
                <input class="form-control" type="text" name="artis" placeholder="Nama Artis" />
            </div class="col-md-6">
            <div class="col-md-6">
                <label class="form-label">Kategori</label>
                <input class="form-control" type="text" name="kategori" placeholder="Kategori" />
            </div>
            <div class="col-md-6">
                <label class="form-label">Stok</label>
                <input class="form-control" type="text" name="stok" placeholder="Stok" />
            </div>
            <div class="col-md-6">
                <label class="form-label">Harga</label>
                <input class="form-control" type="text" name="harga" placeholder="Harga" />
            </div>
            <div class="col-12">
                <label class="form-label">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi Produk" />
            </div>
            
            <div>
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