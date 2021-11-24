<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            height: 100vh;
            /*background-color: rgba(51, 97, 90, 0.7);*/
            margin: 0 auto;
            text-align: center;
        }

        .text {
            font-size: 50px;
            padding-top: 100px;
        }

        input {
            display: block;
            margin: 30px 95px;
            width: 300px;
            height: 30px;
            padding: 5px;
        }

        .submit {
            width: 313px;
            background-color: black;
            border: none;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        p {
            color: red;
        }
    </style>
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
