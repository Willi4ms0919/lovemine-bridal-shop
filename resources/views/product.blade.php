<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }} - LoveMine Bridal Shop</title>
    <style>
        body { font-family: Arial; background: #f8f8f8; margin: 0; }
        header { background: #800040; color: white; padding: 15px 30px; display:flex; justify-content: space-between; }
        header a { color:white; margin-left:15px; text-decoration:none; font-weight:bold; }
        main { max-width:1200px; margin:20px auto; display:flex; gap:20px; }
        .product-image { flex:1; }
        .product-image img { width:100%; max-width:500px; border-radius:8px; }
        .product-details { flex:1; background:white; padding:20px; border-radius:10px; }
        .buy-btn { background:#7ac74f; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; margin-top:15px; }
        .buy-btn:hover { background:#5fa936; }
    </style>
</head>
<body>
<header>
    <h1>LoveMine Bridal Shop</h1>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/rental-booking') }}">Rent</a>
        <a href="{{ url('/cart') }}">Cart</a>
    </nav>
</header>
<main>
    <div class="product-image">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
    </div>
    <div class="product-details">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>₱{{ number_format($product->price,2) }}</p>
        <button class="buy-btn">Add to Cart</button>
    </div>
</main>
</body>
</html>
