<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/register" method="POST">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="confirm-password">Confirm Password</label>
    <input type="password" name="password_confirmation" id="confirm-password">
    <button type="submit">Submit</button>
  </form>
</body>
</html>