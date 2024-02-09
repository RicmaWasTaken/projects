<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Je m'appelle Ricardo Marques, j'ai 20 ans, et je suis un dévelopeur web en formation. J'étudie actuellement la communication digitale en première année du master CAWEB, à l'Université de Strasbourg">
        <title>À propos - Ricma</title>
        <link rel="icon" type="image/x-icon" href="media/Ricma-Icon.png">
        <link rel="stylesheet" href="style-ricma.css">
        <!--début style dédié à la page-->
        <style>
            h1, h2{
                color: whitesmoke;
                font-family: michroma;
                position: relative;
            }
            h1{
                position: relative;
                display: block;
                text-align: center;
                margin-top: 80px;
                font-size: 50px;
            }
            h2{
                left: 50px;
                margin-bottom: 50px;
                font-weight: bolder;
            }
            hr{
                width: 50vw;
            }
            p{
                position: relative;
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
                color: whitesmoke;
                text-align: justify;
                font-size: 18px;
                line-height: 1.5;
            }
            p>span{
                color: aqua;
            }
            h1::selection,h2::selection,p::selection,i::selection{
                color: #222831;
                background-color: aqua;
            }
            span::selection{
                background-color: aqua;
                color: whitesmoke;
            }
            img::selection{
                user-select: none;
            }
            .qui-suis-je{
                margin-top: 50px;
            }
            .qui-suis-je,.caweb-cest-quoi{
                width: 80vw;
                height: fit-content;
                position: relative;
                margin: 0;
                margin: auto;
                display: flex;
                flex-direction: row;
                gap: 50px;
            }
            .liens-perso{
                position: relative;
                display: flex;
                flex-direction: row;
                gap: 16vw;
                /*justify-content: space-between;*/
                xbackground-color: chartreuse;
                width: max-content;
                margin: 50px auto 100px auto;                
            }
            .liens-perso>a{
                text-decoration: none;
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
                font-size: 23px;
                background-color: #222831;
                color: aqua;
                padding: 10px 15px 10px 15px;
                width: 200px;
                text-align: center;
                border: 2px solid aqua;
                border-radius: 20px;
            }
            .liens-perso>a:hover,.liens-master>a:hover{
                background-color: aqua;
                color: #222831;
                border-color: #222831;
                /*transform: rotate(-3deg);*/
                transition-duration: 0.5s;
            }
            .liens-perso>a:active{
                color: x;
            }
            .texte-1,.texte-2{
                text-align: justify;
                font-size: 20px;
                margin-left: 20px;
                width: 60%;
            }
            .texte-2{
                padding-right: 50px;
            }
            .image-1,.image-2{
                margin: auto;
            }
            .image-2{
                padding-left: 30px;
            }
            .image-1>img,.image-2>img{
                display: block;
                width: auto;
                height: 400px;
                margin-top: 50px;
            }
            .image-2>img{
                width: 26vw;
                height: 26vw;
                max-width: 300px;
                max-height: 300px;
            }
            .image-2-mobile{
                display: none;
            }
            .caweb-cest-quoi{
                margin-top: 80px;  
                margin-bottom: 80px;
            }
            .liens-master{
                position: relative;
                width: max-content;
                height: max-content;
                margin: 60px auto 80px auto;
            }
            .liens-master>a{
                text-decoration: none;
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
                font-size: 20px;
                background-color: #222831;
                color: aqua;
                padding: 10px 15px 10px 15px;
                width: 200px;
                text-align: center;
                border: 2px solid aqua;
                border-radius: 20px;
            }
            @media only screen and (max-width: 1000px){
                h1{
                    font-size: 35px;
                    margin-top: 40px;
                    margin-bottom: 30px;
                }
                h2{
                    font-size: 23px;
                    left: 0;
                    margin-bottom: 10px;
                }
                .qui-suis-je,.caweb-cest-quoi{
                    flex-direction: column;
                    width: 90vw;
                    left: 0;
                    margin: 0 auto 0 auto;
                }
                .qui-suis-je{
                    gap: 0;
                }
                .caweb-cest-quoi{
                    margin-top: 80px;
                    margin-bottom: 50px;
                }
                .texte-1,.texte-2{
                    margin-left: 0;
                    padding: 0;
                    width: 100%;
                }
                .image-1>img{
                    width: 240px;
                    height: auto;
                    margin: 0 0 50px 0;
                }
                .image-2{
                    display: none;
                }
                .image-2-mobile{
                    display: unset;
                    width: max-content;
                    height: max-content;
                    margin: auto;
                }
                .image-2-mobile>img{
                    width: 200px;
                    height: auto;
                }
                .liens-perso{
                    flex-direction: column;
                    width: max-content;
                    justify-content: unset;
                    gap: 30px;
                    margin-top: 10px;
                }
                .liens-perso>a{
                    width: 150px;
                    font-size: 20px;
                }
            }
        </style>
        <!--fin style à conserver (dédié à la page)-->
    </head>
    <body>
        <div class="page">
            <?php
            include 'header.php';
            ?>
            <main>
                <h1>À PROPOS</h1>
                <section class="qui-suis-je">
                    <div class="texte-1">
                        <h2>Qui suis-je ?</h2>
                        <p>
                            Je m'appelle <span>Ricardo Marques</span>, j'ai 20 ans et je suis un <span>développeur web en cours de formation</span>, 
                            actuellement en première année d'un master en communication web multilingue (CAWEB) à l'Université de Strasbourg. 
                        </p>
                        <p>
                            Dès ma plus jeune enfance, j'ai eu l'opportunité de grandir dans un environnement multilingue, devant jongler entre le portugais,
                            le français et l'anglais. Rapidement, j'ai développé un intérêt particulier pour les langues et
                            leur fonctionnement, au point d'en devenir une passion. J'étais surtout attiré par la <span>logique derrière
                            les langues</span> - leurs syntaxes, grammaires, morphologies, lexiques, etc - et comment elles se 
                            construisent à l'aide de ces éléments, tel un <span>grand puzzle</span> avec plusieurs types de pièces.
                        </p>
                        <p>
                            Naturellement, cela m'a fait porter mon intérêt à l'informatique et autres 
                            technologies basées sur du code. À 12 ans, fan de <i>Minecraft</i>, je m'amusais à changer 
                            l'<span>HTML et le CSS</span> de la page officielle du jeu sur mon navigateur, afin d'afficher 
                            ce que je souhaitais. Après quoi, mon intérêt n'a fait que grandir et j'ai construit mon projet professionnel
                            autour du sujet, que j'étudie actuellement au sein du <span>master CAWEB</span>.
                        </p>
                    </div>
                    <div class="image-1">
                        <img src="media/ricardo-zoom.png" alt="Portrait Ricardo Marques" width="auto" height="400px">
                    </div>
                </section>
                <section class="liens-perso">
                    <a href="ressources/CV-RicardoMARQUES.pdf">Mon CV</a>
                    <a href="https://www.linkedin.com/in/ricardo-marques-madail/">Mon Linkedin</a>
                </section>
                <hr>
                <section class="caweb-cest-quoi">
                    <div class="image-2">
                        <img src="media/caweb.png" alt="Logotype du master caweb de l'Université de Strasbourg" width="auto" height="400px">
                    </div>
                    <div class="texte-2">
                        <h2>CAWEB ? C'est quoi ?</h2>
                        <p>
                            Le Master en Communication Web Multiligue (CAWEB), est une formation <span class="surligner">polyvalente et 
                            professionnalisante</span>, proposée par l'Université de Strasbourg. 
                        </p>
                        <p>
                            En tant qu'étudiant, j'ai pu y développer une partie de mes compétences dans le domaine du développement
                            web, telles que la programmation (<span class="surligner">HTML, CSS, JavaScript et PHP</span> - qui m'ont été cruciales lors du 
                            développement de ce site), les <span class="surligner">CMS</span> (WordPress et ses plugins, notamment), les bases de données 
                            <span class="surligner">(MySQL, phpMyAdmin)</span>, le transfert de fichiers (FTP, SFTP) et le <span class="surligner">référencement</span> (SEO, SMO), entre autres. 
                        </p>
                        <p>
                            J'ai également pu toucher à d'autres parties de la <span class="surligner">communication web</span>, telles que le 
                            design graphique, la gestion de projets, la localisation, l'UX/UI, le wireframing, le droit du multimédia
                            et l'édition audiovisuelle.
                        </p>
                    </div>
                    <div class="image-2-mobile">
                        <img src="media/caweb.png" alt="Logotype du master caweb de l'Université de Strasbourg" width="200px" height="auto">
                    </div>
                </section>
                <section class="liens-master">
                    <a href="https://mastercaweb.u-strasbg.fr/">Découvrir le master</a>
                </section>
            </main>
            <?php
            include 'footer.php';
            include 'menu.php';
            ?>
        </div>
    </body>
</html>