<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../src/style.css">
            <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <title>Les compétitions</title>
            <link rel="stylesheet" href="../src/style.css" />
        </head>

        <body>
            <?php include('header.php')?>
            <section class="banner-event">
                <div class="banner" alt="the team">
                    <div class=title-background>
                        <h1>Évènements et compétitions</h1>
                    </div>
                </div>
            </section>

            
            <section class="flex">
                <div class="cardEvent">
                    <div class="cardArticle">
                        <div class="cardHeaderbis">
                            <div class="cardPic"></div>
                            <div class="cardBodybis">
                                <h4 class="cardTitlebis">Montréal Gaming Tour 2021</h4>
                                <p class="cardTexte">Les saumons-enflammés sont à nouveau « On The Web Again » pour participer à la célèbre compétition d’E-Sport de Montréal 2021.
                                Comme chaque année l’intégralité des compétitions, auxquelles participeront elles seront retransmises en direct par le site MLG.com, partenaire de la compétition du Montréal Gaming Tour 2021.<p>
                                <a class="cardLinkbis" href="https://www.mlg.com/schedule"><button class="cardButtonbis">Voir article</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardEvent">
                    <div class="cardArticle">
                        <div class="cardHeaderbis">
                            <div class="cardPicbis"></div>
                            <div class="cardBodybis">
                                <h4 class="cardTitlebis">Le rendez-vous gastronomique</h4>
                                <p class="cardTexte">Les saumons-enflammés ne cessent pas de nous faire découvrir de nouveaux lieux à la convivialité toujours plus grande, avec la « touch » insolite qui les caractérise si bien. Ils feront une démo de leurs talents de pêcheurs, au restaurant ZAOA à NEW YORK le 28 octobre 2020 à partir de 11h00, pour notre plus grand plaisir. Vive la pêche !</p>
                                <a class="cardLinkbis" href="https://ny.eater.com/2018/10/9/17956126/zauo-photos-menu-japanese-restaurant-fish-nyc"><button class="cardButtonbis">Voir article</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="join-us">
                <h2>Nous rejoindre</h2>
                <p>On recherche un quatrième joueur ou joueuse pour rejoindre l'équipe. <br> Mentalité compétitive et fortes connaissances en matière de pêche électronique sont requises !</p>               
                <form action="" method="get" class="form-example">
                    <div class="user-name">
                    <label for="name">Ton nom: </label><br>
                    <input type="text" name="name" id="name" required>
                    </div>
                    <div class="user-email">
                    <label for="email">Ton mail: </label><br>
                    <input type="email" name="email" id="email" required>
                    </div>
                    <input type="submit" value="Inscris-toi batard !" class="submit-button">
                    </div>
                </form>
            </div>
            <?php include('footer.php')?>
            <script src="../src/script.js"></script>
        </body>
    </html>