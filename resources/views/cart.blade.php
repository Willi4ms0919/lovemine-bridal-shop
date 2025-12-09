<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart - LoveMine Bridal Shop</title>
    <style>
        body { font-family: Arial; background:#f8f8f8; margin:0; }
        header { background:#800040; color:white; padding:15px 30px; display:flex; justify-content: space-between; }
        header a { color:white; margin-left:15px; text-decoration:none; font-weight:bold; }
        main { max-width:1200px; margin:20px auto; }
        .cart-item { background:white; padding:15px; border-radius:8px; margin-bottom:10px; display:flex; justify-content:space-between; align-items:center; }
        .cart-item img { width:80px; height:80px; object-fit:cover; border-radius:5px; }
        .cart-item-details { flex:1; margin-left:15px; }
        .checkout-btn { background:#7ac74f; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; margin-top:15px; float:right; }
        .checkout-btn:hover { background:#5fa936; }
    </style>
</head>
<body>
<header>
    <h1>LoveMine Bridal Shop</h1>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/rental-booking') }}">Rent</a>
    </nav>
</header>
<main>
    <h2>Your Cart</h2>
    @forelse($cartItems as $item)
    <div class="cart-item">
        <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}">
        <div class="cart-item-details">
            <h3>{{ $item->product->name }}</h3>
            <p>Quantity: {{ $item->quantity }}</p>
            <p>₱{{ number_format($item->product->price,2) }}</p>
        </div>
        <form method="POST" action="{{ route('cart.destroy', $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
        </form>
    </div>
    @empty
    <p>Your cart is empty.</p>
    @endforelse

    <a href="{{ route('checkout') }}"><button class="checkout-btn">Proceed to Checkout</button></a>
</main>
</body>
</html>
    