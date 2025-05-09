<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به پنل مدیریت</title>
</head>
<body>
    <h1>ورود به پنل مدیریت</h1>
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <label for="email">ایمیل:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">رمز عبور:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">ورود</button>
    </form>
    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif
</body>
</html>