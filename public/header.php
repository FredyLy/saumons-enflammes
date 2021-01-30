<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../src/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Nav bar responsive</title>
        </head>
        <body>
            <header id="navbar">      
                <div class="logo" id="logo">
                    <a href="home.php"><img src="../src/img/saumonslogo.png" ></a>
                </div>
                <input id="toggler" class="toggler" type="checkbox" >
                <label for="toggler" class="menu-btn">
                    <span class="ifa"><i class="fa fa-bars"></i></span>
                </label>    
                <nav id="navbar-right">    
                    <ul id="navul">
                        <li><a id="navli" href="home.php">Accueil</a></li>
                        <li><a id="navli"href="team.php">Notre Equipe</a></li>
                        <li><a id="navli"href="stream.php">En Direct</a></li>
                        <li><a id="navli"href="event.php">Évènements</a></li>
                        <li><a id="navli"href="shop.php">Boutique</a></li>  
                    </ul>
                </nav>
            </header>
            <script src="../src/script.js"></script>
        </body>
    </html>