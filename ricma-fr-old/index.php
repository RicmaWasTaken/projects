<!DOCTYPE html>
<html lang="fr"> 
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Bienvenue sur mon site portfolio ! Je suis Ricardo Marques, un développeur web en formation, actuellement en Master CAWEB à l'Université de Strasbourg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ricma - Accueil</title>
        <link rel="icon" type="image/x-icon" href="media/Ricma-Icon.png">
        <link rel="stylesheet" href="style-ricma.css">
        <!--début style dédié à la page-->
        <style>
            .maindiv{
                position: relative;
                float: right;
                top:50px;
                left:0px; 
                width:70vw;
                height:auto;
                color:whitesmoke;
                font-family: michroma;
                padding: 0px;
                left:-3vw;
            }
            .maindiv h1{
                color:whitesmoke;
                font-size: 10vh;
                text-align: center;
            }
            .maindiv h1 span{
                color:aqua;
                font-size: inherit;
            }
            .maindiv h2{
                color:whitesmoke;
                font-size: 2.4vw;
                text-align: right;
                margin-right: 100px;
                margin-top: 5vw;
            }
            .maindiv h3{
                color:whitesmoke;
                font-size: 2.6vw;
                text-align: left;
            }
            .sidebar{
                position: absolute;
                left:10vw;
                top:50vh;
                list-style: none;
                height:200px;
            }
            .sidebar ul{
                list-style: none;
                padding-left: 0;
                margin: 0px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .sidebar ul li img:not(:last-child){
                margin-bottom: 40px;
            }
            .sidebar ul li + li{
                margin-top: 20px;
            }
            @media only screen and (max-width : 650px){
                .sidebar{
                    position: relative;
                    width: 100%;
                    height: max-content;
                    margin-top: 100px;
                    left: 0;
                    top: 0;
                }
                .sidebar ul{
                    display: flex;
                    flex-direction: row;
                    justify-content: space-evenly;
                    margin: 0;
                }
                .sidebar ul li{
                    display: inline;
                }
                .sidebar ul li + li{
                    margin: 0;
                }
                .maindiv{
                    font-size: 20px;
                    float: none;
                    width: 90%;
                    height: 50%;
                    left: 0;
                    margin-top: 20px;
                    text-align: center;
                    margin: 20px auto 0 auto;
                }
                .maindiv h1{
                    font-size: 15vw;
                }
                .maindiv h1 span{
                    font-size: inherit;
                }
                .maindiv h2{
                    margin: 0;
                    text-align: center;
                    font-size: 7vw;
                }
                .maindiv h3{
                    margin: 0;
                    text-align: center;
                    font-size: 5vw;
                }
            }
            @media only screen and (min-width: 450px) and (max-width:650px){
                .maindiv h1{
                    font-size: 67.5px !important;
                }
                .maindiv h2{
                    font-size: 31.5px;
                }
                .maindiv h3{
                    font-size: 22.5px;
                }
            }
        </style>
        <!--fin style dédié à la page-->
    </head>
    <body>
        <div class="page">
            <?php
            include 'header.php';
            ?>
            <main>
                <div class="desktop maindiv">
                    <div class="desktop divh4">
                        <h3>Je suis...</h3>
                    </div>
                    <div class="desktop divh1">
                        <h1>Ricardo <span>Marques</span></h1>
                    </div>
                    <div class="desktop divh2">
                        <h2>Web Developer - En Formation</h2>
                    </div>
                </div>
                <div class="desktop sidebar">
                    <ul>
                        <li><a href="https://www.linkedin.com/in/ricardo-marques-1386aa225/"><img src="../media/linkedin.png" alt="lien vers linkedin" height="40px" width="40px"></a></li>
                        <li><a href="https://github.com/ricmawastaken"><img src="../media/github.png" alt="lien vers github" height="40px" width="40px"></a></li>
                        <li><a href="https://www.instagram.com/ricma.fr/"><img src="../media/instagram.png" alt="lien vers instagram" height="40px" width="40px"></a></li>
                    </ul>
                </div>
            </main>
            <?php
            include 'footer.php';
            include 'menu.php';
            ?>
        </div>
    </body>
</html>