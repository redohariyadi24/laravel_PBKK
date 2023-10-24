<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <!-- Menghubungkan CSS dari Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/styletable.css') !!}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Blue Store</h1>
    </header>
    <!-- Konten Utama -->
    <div class="container">
        <h1>Kategori</h1>
        <div class="container1">
            <a class="btn-tambah" href="{{ route('kategori.tambah') }}">Tambah kategori</a>
            <div class="message">
                @if(session()->has('success'))
                    {{ session('success') }}
                @endif
            </div>
        </div>
        <table class="table table-light table-striped-columns">
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Edit | Hapus</th>
            </tr>
            <?php?>  
            @foreach ($kategoris as $kategori) 
                <tr>
                    <th>{{ $kategori->id }}</th>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td class="center">
                        <a href="{{ route('kategori.edit', ['kategori' => $kategori]) }}" class="btn-edit">Edit</a>
                        <form method="post" action="{{ route('kategori.hapus', ['kategori' => $kategori]) }}">
                            @csrf  <!-- Menerapkan Perlindungan CSRF (Cross-Site Request Forgery) -->
                            @method('delete') <!-- Menggunakan metode HTTP 'DELETE' untuk menghapus Kategori -->
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