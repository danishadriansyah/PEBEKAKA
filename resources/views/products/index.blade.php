<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin: 20px 0;
        }
        .product-image {
            width: 100px; /* Ukuran gambar */
            height: auto;
        }
        .navbar {
            background-color: #ff5722;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .nav-link {
            color: white !important;
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .product-item {
            flex: 1 1 calc(33.333% - 15px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            background-color: white;
        }
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-item p {
            margin: 10px 0 0;
            font-size: 16px;
            font-weight: bold;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .search-bar {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td> <!-- Menampilkan nama kategori -->
                        <td>
                            @if($product->image)
                                <!-- Menampilkan gambar dengan asset() -->
                                <img src="{{ asset($product->image) }}" class="product-image" alt="{{ $product->name }}">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
