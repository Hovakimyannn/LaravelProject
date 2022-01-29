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
            <button id="new-message" class="border fa" onclick="message()" style="font-size: 30px;">&#xf0e0</button>
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
                    1. "If you want to achieve greatness stop asking for permission." --Anonymous<br>
                    2. "Things work out best for those who make the best of how things work out." --John Wooden<br>
                    3. "To live a creative life, we must lose our fear of being wrong." --Anonymous<br>
                    4. "If you are not willing to risk the usual you will have to settle for the ordinary." --Jim Rohn<br>
                    5. "Trust because you are willing to accept the risk, not because it's safe or certain." --Anonymous<br>
                    6. "Take up one idea. Make that one idea your life--think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success." --Swami Vivekananda<br>
                    7. "All our dreams can come true if we have the courage to pursue them." --Walt Disney<br>
                    8. "Good things come to people who wait, but better things come to those who go out and get them." --Anonymous<br>
                    9. "If you do what you always did, you will get what you always got." --Anonymous<br>
                    10. "Success is walking from failure to failure with no loss of enthusiasm." --Winston Churchill<br>
                    11. "Just when the caterpillar thought the world was ending, he turned into a butterfly." --Proverb<br>
                    12. "Successful entrepreneurs are givers and not takers of positive energy." --Anonymous<br>
                    13. "Whenever you see a successful person you only see the public glories, never the private sacrifices to reach them." --Vaibhav Shah<br>
                    14. "Opportunities don't happen, you create them." --Chris Grosser<br>
                    15. "Try not to become a person of success, but rather try to become a person of value." --Albert Einstein<br>
                    16. "Great minds discuss ideas; average minds discuss events; small minds discuss people." --Eleanor Roosevelt<br>
                    17. "I have not failed. I've just found 10,000 ways that won't work." --Thomas A. Edison<br>
                    18. "If you don't value your time, neither will others. Stop giving away your time and talents--start charging for it." --Kim Garst<br>
                    19. "A successful man is one who can lay a firm foundation with the bricks others have thrown at him." --David Brinkley<br>
                    20. "No one can make you feel inferior without your consent." --Eleanor Roosevelt<br>
                    21. "The whole secret of a successful life is to find out what is one's destiny to do, and then do it." --Henry Ford<br>
                    22. "If you're going through hell keep going." --Winston Churchill<br>
                    23. "The ones who are crazy enough to think they can change the world, are the ones who do." --Anonymous<br>
                    24. "Don't raise your voice, improve your argument." --Anonymous<br>
                    25. "What seems to us as bitter trials are often blessings in disguise." --Oscar Wilde<br>
                    26. "The meaning of life is to find your gift. The purpose of life is to give it away." --Anonymous<br>
                    27. "The distance between insanity and genius is measured only by success." --Bruce Feirstein<br>
                    28. "When you stop chasing the wrong things, you give the right things a chance to catch you." --Lolly Daskal<br>
                    29. "I believe that the only courage anybody ever needs is the courage to follow your own dreams." --Oprah Winfrey<br>
                    30. "No masterpiece was ever created by a lazy artist." --Anonymous<br>
                    31. "Happiness is a butterfly, which when pursued, is always beyond your grasp, but which, if you will sit down quietly, may alight upon you." --Nathaniel Hawthorne<br>
                    32. "If you can't explain it simply, you don't understand it well enough." --Albert Einstein<br>
                    33. "Blessed are those who can give without remembering and take without forgetting." --Anonymous<br>
                    34. "Do one thing every day that scares you." --Anonymous<br>
                    35. "What's the point of being alive if you don't at least try to do something remarkable." --Anonymous<br>
                    36. "Life is not about finding yourself. Life is about creating yourself." --Lolly Daskal<br>
                    37. "Nothing in the world is more common than unsuccessful people with talent." --Anonymous<br>
                    38. "Knowledge is being aware of what you can do. Wisdom is knowing when not to do it." --Anonymous<br>
                    39. "Your problem isn't the problem. Your reaction is the problem." --Anonymous<br>
                    40. "You can do anything, but not everything." --Anonymous<br>
                    41. "Innovation distinguishes between a leader and a follower." --Steve Jobs<br>
                    42. "There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed." --Ray Goforth<br>
                    43. "Thinking should become your capital asset, no matter whatever ups and downs you come across in your life." --A.P.J. Abdul Kalam<br>
                    44. "I find that the harder I work, the more luck I seem to have." --Thomas Jefferson<br>
                    45. "The starting point of all achievement is desire." --Napoleon Hill<br>
                    46. "Success is the sum of small efforts, repeated day-in and day-out." --Robert Collier<br>
                    47. "If you want to achieve excellence, you can get there today. As of this second, quit doing less-than-excellent work." --Thomas J. Watson<br>
                    48. "All progress takes place outside the comfort zone." --Michael John Bobak<br>
                    49. "You may only succeed if you desire succeeding; you may only fail if you do not mind failing." --Philippos<br>
                    50. "Courage is resistance to fear, mastery of fear--not absence of fear." --Mark Twain<br>
                    51. "Only put off until tomorrow what you are willing to die having left undone." --Pablo Picasso<br>
                    52. "People often say that motivation doesn't last. Well, neither does bathing--that's why we recommend it daily." --Zig Ziglar<br>
                    53. "We become what we think about most of the time, and that's the strangest secret." --Earl Nightingale<br>
                    54. "The only place where success comes before work is in the dictionary." --Vidal Sassoon<br>
                    55. "Too many of us are not living our dreams because we are living our fears." --Les Brown<br>
                    56. "I find that when you have a real interest in life and a curious life, that sleep is not the most important thing." --Martha Stewart<br>
                    57. "It's not what you look at that matters, it's what you see." --Anonymous<br>
                    58. "The road to success and the road to failure are almost exactly the same." --Colin R. Davis<br>
                    59. "The function of leadership is to produce more leaders, not more followers." --Ralph Nader<br>
                    60. "Success is liking yourself, liking what you do, and liking how you do it." --Maya Angelou<br>
                    61. "As we look ahead into the next century, leaders will be those who empower others." --Bill Gates<br>
                    62. "A real entrepreneur is somebody who has no safety net underneath them." --Henry Kravis<br>
                    63. "The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself." --Mark Caine<br>
                    64. "People who succeed have momentum. The more they succeed, the more they want to succeed, and the more they find a way to succeed. Similarly, when someone is failing, the tendency is to get on a downward spiral that can even become a self-fulfilling prophecy." --Tony Robbins<br>
                    65. "When I dare to be powerful, to use my strength in the service of my vision, then it becomes less and less important whether I am afraid." --Audre Lorde<br>
                    66. "Whenever you find yourself on the side of the majority, it is time to pause and reflect." --Mark Twain<br>
                    67. "The successful warrior is the average man, with laser-like focus." --Bruce Lee<br>
                    68. "There is no traffic jam along the extra mile." --Roger Staubach<br>
                    69. "Develop success from failures. Discouragement and failure are two of the surest stepping stones to success." --Dale Carnegie<br>
                    70. "If you don't design your own life plan, chances are you'll fall into someone else's plan. And guess what they have planned for you? Not much." --Jim Rohn<br>
                    71. "If you genuinely want something, don't wait for it--teach yourself to be impatient." --Gurbaksh Chahal<br>
                    72. "Don't let the fear of losing be greater than the excitement of winning." --Robert Kiyosaki<br>
                    73. "If you want to make a permanent change, stop focusing on the size of your problems and start focusing on the size of you!" --T. Harv Eker<br>
                    74. "You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future. You have to trust in something--your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life." --Steve Jobs<br>
                    75. "Two roads diverged in a wood and I  took the one less traveled by, and that made all the difference." --Robert Frost<br>
                    76. "The number one reason people fail in life is because they listen to their friends, family, and neighbors." --Napoleon Hill<br>
                    77. "The reason most people never reach their goals is that they don't define them, or ever seriously consider them as believable or achievable. Winners can tell you where they are going, what they plan to do along the way, and who will be sharing the adventure with them." --Denis Waitley<br>
                    78. "In my experience, there is only one motivation, and that is desire. No reasons or principle contain it or stand against it." --Jane Smiley<br>
                    79. "Success does not consist in never making mistakes but in never making the same one a second time." --George Bernard Shaw<br>
                    80. "I don't want to get to the end of my life and find that I lived just the length of it. I want to have lived the width of it as well." --Diane Ackerman<br>
                    81. "You must expect great things of yourself before you can do them." --Michael Jordan<br>
                    82. "Motivation is what gets you started. Habit is what keeps you going." --Jim Ryun<br>
                    83. "People rarely succeed unless they have fun in what they are doing." --Dale Carnegie<br>
                    84. "There is no chance, no destiny, no fate, that can hinder or control the firm resolve of a determined soul." --Ella Wheeler Wilcox<br>
                    85. "Our greatest fear should not be of failure but of succeeding at things in life that don't really matter." --Francis Chan<br>
                    86. "You've got to get up every morning with determination if you're going to go to bed with satisfaction." --George Lorimer<br>
                    87. "A goal is not always meant to be reached; it often serves simply as something to aim at." -- Bruce Lee<br>
                    88. "Success is ... knowing your purpose in life, growing to reach your maximum potential, and sowing seeds that benefit others." --John C. Maxwell<br>
                    89. "Be miserable. Or motivate yourself. Whatever has to be done, it's always your choice." --Wayne Dyer<br>
                    90. "To accomplish great things, we must not only act, but also dream, not only plan, but also believe." --Anatole France<br>
                    91. "Most of the important things in the world have been accomplished by people who have kept on trying when there seemed to be no help at all." --Dale Carnegie<br>
                    92. "You measure the size of the accomplishment by the obstacles you had to overcome to reach your goals." --Booker T. Washington<br>
                    93. "Real difficulties can be overcome; it is only the imaginary ones that are unconquerable." --Theodore N. Vail<br>
                    94. "It is better to fail in originality than to succeed in imitation." --Herman Melville<br>
                    95. "What would you do if you weren't afraid." --Spencer Johnson<br>
                    96. "Little minds are tamed and subdued by misfortune; but great minds rise above it." --Washington Irving<br>
                    97. "Failure is the condiment that gives success its flavor." --Truman Capote<br>
                    98. "Don't let what you cannot do interfere with what you can do." --John R. Wooden<br>
                    99. "You may have to fight a battle more than once to win it." --Margaret Thatcher<br>
                    100. "A man can be as great as he wants to be. If you believe in yourself and have the courage, the determination, the dedication, the competitive drive and if you are willing to sacrifice the little things in life and pay the price for the things that are worthwhile, it can be done." --Vince Lombardi<br>
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
    <message id="message" class="hidden" value="{{$message}}"></message>
</div>

</body>
</html>
