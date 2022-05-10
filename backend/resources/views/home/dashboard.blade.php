<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hola soy home/dashboard</h1>
  @auth
    <p>Congratz you are authenticated</p>
  @endauth
  @guest
    <p>You have to <a href="/login">Login</a>
  @endguest
</body>
</html>