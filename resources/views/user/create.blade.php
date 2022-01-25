<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/create.css">
    <title>Sign Up</title>
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
