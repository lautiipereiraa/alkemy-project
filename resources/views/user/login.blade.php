<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{url('/login')}}" method="POST">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password">
        <button type="submit">Iniciar sesion</button>
    </form>
</body>
</html>