<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <title>Page non trouvée - Ricma</title>
        <link rel="icon" type="image/x-icon" href="media/Ricma-Icon.png">
        <link rel="stylesheet" href="style-ricma.css">
        <!--début style dédié à la page-->
        <style>
            h1,h2{
                color: whitesmoke;
                text-align: center;
                font-family: michroma;
            }
            h1{
                font-size: 50px;
                margin-top: 80px;
            }
            h2{
                font-size: 26px;
                margin-top: 50px;
            }
            h2+h2{
                margin-top: 10px;
            }
            main>a{
                text-decoration: none;
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
                font-size: 23px;
                background-color: #222831;
                color: aqua;
                padding: 10px 15px 10px 15px;
                width: 250px;
                text-align: center;
                border: 2px solid aqua;
                border-radius: 20px;
                margin: auto;
                margin-top: 110px;
                display: block;
            }
            main>a:hover{
                background-color: aqua;
                color: #222831;
                border-color: #222831;
            }
            main>div{
                width: 80vw;
                margin: auto;
            }
            @media only screen and (max-width: 850px){
                h2{
                    font-size: 20px;
                    margin: 50px auto 0 auto;
                }
            }
            @media only screen and (max-width: 650px){
                h1{
                    font-size: 35px;
                    margin-top: 40px;
                }
                h2{
                    font-size: 20px;
                    margin: 70px auto 0 auto;
                }
                h2+h2{
                    margin-top: 20px;
                }
                main>a{
                    margin-top: 80px;
                    font-size: 20px;
                    width: 190px;
                }
            }
        </style>
        <!--début style dédié à la page-->
    </head>
    <body>
        <div class="page">
            <?php
            include 'header.php';
            ?>
            <main>
                <div>
                    <h1>PAGE NON TROUVÉE</h1>
                    <h2>La page que vous cherchez ne semble pas exister</h2>
                    <h2>Pour trouver ce que vous cherchez, utilisez la navigation au dessus ou revenez à l'accueil</h2>
                </div>
                <a href="index.php">Accueil</a>
            </main>
            <?php
            include 'footer.php';
            include 'menu.php';
            ?>
        </div>
    </body>
</html>