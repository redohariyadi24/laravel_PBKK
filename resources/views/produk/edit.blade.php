<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form method="post" action="{{ route('produk.update', ['produk' => $produk]) }}">
        @csrf
        @method('put') 
        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama Produk" value="{{ $produk->nama }}"/>
        </div>
        <div>
            <label>Artis</label>
            <input type="text" name="artis" placeholder="Nama Artis" value="{{ $produk->artis }}"/>
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" placeholder="Kategori" value="{{ $produk->kategori }}"/>
        </div>
        <div>
            <label>Stok</label>
            <input type="text" name="stok" placeholder="Stok" value="{{ $produk->stok }}"/>
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="harga" placeholder="Harga" value="{{ $produk->harga }}"/>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" placeholder="Deskripsi Produk" value="{{ $produk->deskripsi }}"/>
        </div>
        
        <div>
            <input type="submit" value="Update Data Produk" />
        </div>
    </form>
</body>
</html>