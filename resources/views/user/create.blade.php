<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
    <h1 class="text">Sign Up</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <input type="text" placeholder="name" name="name" required>
        <input type="email" placeholder="email" name="email" required value="{{old('email')}}">
        <input type="password" placeholder="password" name="password" required>
        <input type="password" placeholder="confirm password" name="password_confirmation" required>
        <input type="submit" class="submit">
    </form>
</div>
</body>
</html>
