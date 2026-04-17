<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login" method="POST">
        
        
        <input type="email" name="email">
        <input type="paswword" name="password">
        
        <input type="submit" value="Entrar">

        @csrf
    </form>
</body>
</html>