<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/userPage.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/todo.js" defer></script>
    <script src="js/message.js" defer></script>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="userUI">
            <form method="post" enctype="multipart/form-data">
                @csrf
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
            <button class="border fa" onclick="message()" style="font-size: 30px;">&#xf0e0</button>
            <a class="border" href="{{route('logout')}}">Logout</a>
        </div>
    </header>
    <main class="main">
        <nav class="nav">
            Nav
        </nav>
        <article class="article">
            <div class="context-border">
                <p class="context">
                    <img id="contextImage" src="storage/{{\Illuminate\Support\Facades\Auth::user()->userImage}}" class="user-image-style" alt="" style="border-radius: 10px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantiumaut dolorum maxime necessitatibus odit possimus quasi quis rerum! Lorem ipsum dolor sit amet,consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!eum ipsum pariatur sit soluta. Accusantiumaut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, possimus quasi quis rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias nesciunt Consequuntur molestias nesciunt quasi repellendus vitae. Cupiditate eum ipsum pariatur sit soluta. Accusantium aut dolorum maxime necessitatibus odit possimus quasi quis rerum!
                </p>
            </div>
        </article>
        <aside class="aside">
            Aside
        </aside>
    </main>

    <footer class="footer">
        Footer
    </footer>
</div>
<div id="place-for-message">
</div>

</body>
</html>
