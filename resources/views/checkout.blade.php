<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - LoveMine Bridal Shop</title>
    <style>
        body { font-family: Arial; background:#f8f8f8; margin:0; }
        header { background:#800040; color:white; padding:15px 30px; display:flex; justify-content: space-between; }
        header a { color:white; margin-left:15px; text-decoration:none; font-weight:bold; }
        main { max-width:600px; margin:20px auto; background:white; padding:20px; border-radius:10px; }
        input, textarea { width:100%; padding:8px; margin-top:5px; border:1px solid #ccc; border-radius:5px; }
        label { margin-top:10px; display:block; font-weight:bold; }
        .confirm-btn { background:#7ac74f; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; margin-top:15px; }
        .confirm-btn:hover { background:#5fa936; }
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
    <h2>Checkout</h2>
    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <label>Full Name</label>
        <input type="text" name="name">

        <label>Contact Number</label>
        <input type="text" name="contact">

        <label>Address</label>
        <textarea name="address" rows="3"></textarea>

        <label>Payment Method</label>
        <select name="payment">
            <option value="cash">Cash on Delivery</option>
            <option value="gcash">GCash</option>
        </select>

        <button type="submit" class="confirm-btn">Place Order</button>
    </form>
</main>
</body>
</html>
