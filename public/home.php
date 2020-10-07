<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/style.css" />
    <title>Fishing Sim World Pro Tour</title>
</head>
<body>
<section id="nav-bar-top">
        <?php include('header.php')?>
</section>
    <section class="video-home">
        <video autoplay loop muted class="video-background">
            <source src="../src/img/Video.mp4" type="video/mp4">
            
            <!-- Pour afficher la vidéo dans tous les navigateurs-->
            <source src="" type="video/ogg">
            <source src="" type="video/webm">
            
        </video>
    </section>
     
    <section id="descr-homepage">
        <div>
            <h2>Le jeu</h2>

            <p>Fishing Sim World Pro Tour est un simulateur hautement réaliste qui vous fera voyager et vivre des expériences de pêche sans précédent. 
            Ressentez l’adrénaline monter lorsque vous attraperez de monstrueux bars, de grands brochets ou de gigantesques carpes ! 
            Fishing Sim World dispose de physiques en jeu réalistes et de poissons IA authentiques qui rendront cette expérience aussi immersible que possible.</p>

            <p>Vos talents de pêcheur seront mis à l’épreuve tandis que vous explorerez les lacs des USA, situés en Floride et à New-York, 
            ainsi que 5 lacs européens, tels que celui de Gigantica en France et le Grand Union Canal au Royaume-Uni. Traquez les 18 espèces de poissons différentes et collectionnez des centaines d’équipements, y compris des objets de grandes marques 
            sous licence comme Bass Cat Boats, Rat-L-Trap, Duckett Fishing et Korda. Utilisez le GPS de votre bateau et le sonar pour 
            localiser les bars avant de choisir la bonne technique qui vous permettra de les capturer.</p>

            <p>Grâce à des systèmes IA avancés, les poissons et les types d'espèces ont tous des comportements différents. Ils ne réagiront pas de la même manière aux températures de l'eau et aux appâts proposés, vous devrez donc faire preuve de stratégie pour attraper vos proies. 
            Pêchez à votre rythme et trouvez l’endroit parfait, puis mettez-vous au défi d’attraper le plus beau poisson.</p>
            </p>
        </div>

        <div>
            <h2>Dernières news</h2>

            <div class="cards">
            <div class="card">
                <div class="card-header">
                <div class="card-img"></div>
                <div class="card-body">
                    <h4 class="card-title">Ultimate Fishing Simulator disponible sur Xbox One</h4>
                    <a class="card-link" href="https://www.simulagri.fr/2020/05/ultimate-fishing-simulator-disponible-sur-xbox-one/"><button class="card-button">Voir l'article</button></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <?php include('footer.php')?>
  <script src="../src/script.js"></script>
</body>
</html>