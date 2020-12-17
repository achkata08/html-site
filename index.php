<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="navbar-ul base">
                <li><a class="link" href="/">Home</a></li>
                <li><a class="link" href="/about.html">About</a></li>
            </ul>
            <ul class="navbar-ul hamburger">
                <li class="navbar-ul">
                    <a href="javascript:void(0);" class="link"  onclick="hamburgeFunc()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <div class="hamburger-menu" id="hamb">
                    <ul>
                        <li><a class="link" href="/">Home</a></li>
                        <li><a class="link" href="/about.html">About</a></li>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>
    <main class="content">
        <blockquote class="quote">Пътят нагоре никога не е лесен, но въпреки това следвай мечтите си!
        <hr>
        <small><?php echo 'Angel Angelov'; ?></small> 
        </blockquote>
    </main>
    <footer class="footer">
        
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-skype"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-instagram"></i>
        <i class="fas fa-envelope"></i>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>