<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Products - LoveMine Bridal Shop</title>
    <style>
        body { font-family: Arial; margin:0; background:#f8f8f8; }
        header { background:#800040; color:white; padding:15px 30px; display:flex; justify-content: space-between; }
        header a { color:white; margin-left:15px; text-decoration:none; font-weight:bold; }
        main { max-width:1200px; margin:20px auto; }
        table { width:100%; border-collapse: collapse; background:white; border-radius:8px; overflow:hidden; }
        th, td { padding:10px; border-bottom:1px solid #ccc; text-align:left; }
        .btn { background:#7ac74f; color:white; padding:5px 10px; border:none; border-radius:5px; cursor:pointer; }
        .btn:hover { background:#5fa936; }
    </style>
</head>
<body>
<header>
    <h1>Admin - Products</h1>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    </nav>
</header>
<main>
    <h2>Products</h2>
    <a href="{{ route('products.create') }}"><button class="btn">Add New Product</button></a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>₱{{ number_format($product->price,2) }}</td>
                <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}"><button class="btn">Edit</button></a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
</body>
</html>
