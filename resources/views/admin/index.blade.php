<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/adminPage.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/admin/leave.js" defer></script>
    <script src="js/todo.js" defer></script>
    <script src="js/admin/message.js" defer></script>
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
                         src="storage/{{\Illuminate\Support\Facades\Auth::user()->userImage??"default.png"}}" alt="img">
                </div>
            </form>

            <h2 class="userName">{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
        </div>
        <div class="link">
            <button id="new-message" class="border fa" onclick="adminMessage()" style="font-size: 30px;">&#xf0e0</button>
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
                        <button onclick="removeUser({{$user->id}})" class="button" type="submit" id="leave">Remove
                        </button>
                    </div>
                @endforeach
            </div>
        </article>
    </main>
    <footer class="footer">
    </footer>
</div>
<div id="place-for-message">
</div>
</body>
</html>
