<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <h1 class="text">Login</h1>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <input type="submit" class="submit">
    </form>
</div>
</body>
</html>
