<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/tablestyle.css') !!}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Blue Store</h1>
    </header>
    
    <div class="container">
        <div class="container1">
            <div>
                @if(session()->has('success'))
                    {{ session('success') }}
                @endif
            </div>
            <h1>Data Produk</h1>
            <a class="btn-tambah" href="{{ route('produk.tambah') }}">Tambah Produk</a>
        </div>
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
            @foreach ($produks as $produk) 
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->artis }}</td>
                    <td>{{ $produk->kategori }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td class="special">Rp. {{ number_format($produk->harga, 2, ',', '.') }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td class="center">
                        <a href="{{ route('produk.edit', ['produk' => $produk]) }}" class="btn-edit">Edit</a>
                    </td>
                    <td class="center">
                        <form method="post" action="{{ route('produk.hapus', ['produk' => $produk]) }}">
                            @csrf
                            @method('delete')
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