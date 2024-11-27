<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin: 20px 0;
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
        <h1>Tambah Produk</h1>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
