<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/adminPage.css'>
    <script src="js/leave.js"></script>
    <script src="js/todo.js"></script>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="userUI">
            <form method="post" enctype="multipart/form-data">

                <input type="file">
                <button type="submit" id="send"> send</button>
                <div>
                    <img class="user-image-style" id="userImage"
                         src="storage/{{\Illuminate\Support\Facades\Auth::user()->userImage}}" alt="img">
                </div>
            </form>

            <h2 class="userName">{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
        </div>
        <div class="link">
            <a class="border" href="#">Link 1</a>
            <a class="border" href="#">Link 2</a>
            <a class="border" href="{{route('logout')}}">Logout</a>
        </div>
    </header>
    <main class="main">
        <article class="cube">
            <div>
                @foreach($users as $user)
                    <div id="{{$user->id}}" class="border-list">
                        <h1>
                            {{$user->id}}
                        </h1>
                        <img src="storage\{{$user->userImage}}" class="users-image">
                        <h1>
                            {{$user->name}}
                        </h1>
                        <button onclick="removeUser({{$user->id}})" class="button" type="submit" id="leave">Remove</button>
                    </div>
                @endforeach
            </div>
        </article>
    </main>
    <footer class="footer">
        Footer
    </footer>
</div>
</body>
</html>
