<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('auth.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
