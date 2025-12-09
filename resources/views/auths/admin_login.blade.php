<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - LoveMine</title>
    <style>
        body { font-family: Arial; background:#f8f8f8; display:flex; justify-content:center; align-items:center; height:100vh; }
        .login-box { background:#fff; padding:30px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:300px; }
        .login-box h2 { text-align:center; margin-bottom:20px; color:#800040; }
        input { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
        button { width:100%; padding:10px; background:#800040; color:#fff; border:none; border-radius:5px; cursor:pointer; }
        button:hover { background:#5a0030; }
        .error { color:red; font-size:14px; margin-top:5px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
