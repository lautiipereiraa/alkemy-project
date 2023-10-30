<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/user/create')}}">
    <input type="text" name="nombre">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="telefono">
    <input type="text" name="domicilio">
    <button type="submit">Registrar</button>
    </form>
</body>
</html>