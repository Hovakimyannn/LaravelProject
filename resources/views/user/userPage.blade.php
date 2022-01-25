<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/userPage.css'>
    <script src="js/todo.js"></script>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="userUI">
            <img class="userImage" src="storage/{{\Illuminate\Support\Facades\Auth::user()->userImage}}" alt="img">
            <form id="form" class="uploadFile" method="post" enctype="multipart/form-data">
                <input
                    type="file"
                    name="image">
                <button type="submit" id="send"> send </button>
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
        <article class="article">
            Article
        </article>
        <nav class="nav">
            Nav
        </nav>
        <aside class="aside">
            Aside
        </aside>
    </main>
    <footer class="footer">
        Footer
    </footer>
</div>
</body>
</html>
