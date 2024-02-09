<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Voici tous les projets - personnels ou professionnels - sur lesquels j'ai pu travailler ! Vous voulez agrandir la liste ? Contactez-moi !">
        <title>Projets - Ricma</title>
        <link rel="icon" type="image/x-icon" href="media/Ricma-Icon.png">
        <link rel="stylesheet" href="style-ricma.css">
        <style>
            h1{
                position: relative;
                font-size: 50px;
                margin-top: 80px;
                margin-bottom: 150px;
                text-align: center;
                font-family: michroma;
                color: whitesmoke;
            }
            h2{
                color: whitesmoke;
                margin-bottom: 50px;
                font-family: michroma;
                font-size: 26px;
            }
            hr{
                width: 40vw;
                border: 2px solid aqua;
            }
            section{
                margin-bottom: 100px;
                margin-top: 100px;
            }
            .sous-section{
                width: 75vw;
                margin: auto;
            }
            .vitrine{
                position: relative;
                display: flex;
                width: 100%;
                gap: 70px;
                /*padding: 0 20px 0 20px;
                border-right: 3px solid aqua;
                border-left: 3px solid aqua;*/
            }
            .image{
                width: 30%;
                height: max-content;
                margin: auto;
            }
            .image>img{
                width: 100%;
                height: auto;
                margin:auto;
            }
            .texte{
                color: whitesmoke;
                width: calc(55vw - 70px);
            }
            .texte>p{
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
                font-size: 18px;
                text-align: justify;
                text-justify: inter-word;
                line-height: 1.5;
            }
            .surligner{
                color: aqua;
            }
            h1::selection,h2::selection,p::selection{
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
            @media only screen and (max-width: 1000px){
                h1{
                    font-size: 35px;
                    margin-bottom: 0;
                }
                h2{
                    font-size: 22px;
                    text-align: center;
                    margin-bottom: 70px;
                }
                section{
                   margin-top: 70px; 
                   margin-bottom: 70px;
                }
                .sous-section{
                    width: 80vw;
                }
                .vitrine{
                    flex-direction: column;
                    gap: 30px;
                }
                .texte{
                    width: 100%;
                }
                .image{
                    width: 230px;
                    height: auto;
                }
            }
            @media only screen and (max-width:650px){
                h1{
                    margin-top: 40px;
                }
                .sous-section{
                    width: 90vw;
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
                <h1>PROJETS</h1>
                <section>
                    <div class="sous-section">
                        <h2>« Théâtre en Français à Berlin » - Refonte de site</h2>
                        <div class="vitrine">
                            <div class="image">
                                <img src="media/tfb.png" alt="">
                            </div>
                            <div class="texte">
                                <p class="date">De Janvier à Juin 2023</p>
                                <p>Actuellement menée lors d'un stage conventionné dans le cadre du master CAWEB, la refonte du 
                                    site du Théâtre en Français à Berlin (TFB) vise à simuler de manière réaliste
                                    une <span class="surligner">expérience en agence web</span>. 
                                </p>
                                <p>
                                    Au sein d'une équipe de <span class="surligner">5 personnes</span>, composée de plusieurs profils spécialisés dans des domaines clés, j'occupe le poste de <span class="surligner">"lead developer"</span>, 
                                    en charge du <span class="surligner">développement du site et de son intégration</span> sur WordPress. Étant donné la petite taille de notre équipe, j'ai également pu 
                                    participer au déroulement du projet dans des domaines autres que le développement, tels que <span class="surligner">l'UX/UI et le référencement</span>.
                                </p>
                                <p>
                                    Avec mon équipe, il a été de notre responsabilité de trouver et contacter une entreprise en besoin de nos services - ici, le TFB -
                                    comprendre ses <span class="surligner">besoins et attentes</span>, rédiger le cahier des charges, créer une identité graphique, concevoir une 
                                    arborescence adaptée, élaborer les maquettes, les modifier en fonction de l'apport du client et développer le site.
                                </p>
                                <p>
                                    Outils/Technologies : HTML, CSS, JavaScript, PHP, WordPress, Figma, Trello, Photoshop

                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <section>
                    <div class="sous-section">
                        <h2>« Projet Ricma » - Création de site</h2>
                        <div class="vitrine">
                            <div class="image">
                                <img src="media/RicmaLogo-WA.png" alt="">
                            </div>
                            <div class="texte">
                                <p class="date">Depuis Février 2023</p>
                                <p>
                                    Ricma est un projet qui a <span class="surligner">énormément d'importance</span> pour moi. Il tient son nom de mon identifiant FTP dans le 
                                    serveur du master, "ricma", que j'ai créé en début septembre, avant même de savoir ouvrir une balise HTML.
                                </p>
                                <!--Je vous ai bien dit que c'était des balises <p> !-->
                                <p>
                                    D'abord imaginé comme un simple "site portfolio" propulsé par un CMS, le projet Ricma a rapidement évolué. 
                                    J'ai décidé de le <span class="surligner">développer "from scratch"</span>, et donc de le coder dans son intégralité, afin de pouvoir mettre 
                                    mes <span class="surligner">compétences à l'épreuve et en acquérir</span> de nouvelles. J'ai donc tout codé, du header au footer, en passant par les titres et ces mêmes balises paragraphe
                                    que vous lisez. 
                                    Je compte également transformer Ricma en mon <span class="surligner">"hub" personnel</span>, 
                                    dans lequel figureront, non seulement mon portfolio, mais également mes projets personnels en lien avec le développement
                                    et autres tests que je mènerai éventuellement, dans leurs sous-domaines respectifs.
                                </p>
                                <p>
                                    La <span class="surligner">notion de "projet"</span> est particulièrement importante lorsqu'on mentionne Ricma. En effet, c'est un projet que je mène seul et, 
                                    en plus du développement web, j'ai également pu aiguiser mes compétences en <span class="surligner">graphisme, UI/UX et référencement</span>, à travers 
                                    la création d'une charte graphique et d'un logo, la disposition des éléments et des CTA et 
                                    l'optimisation des temps de chargement des pages et du positionnement du site dans les moteurs de recherche.
                                </p>
                                <p>
                                    Outils/Technologies : HTML, CSS, JavaScript, PHP, Photoshop
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php
            include 'footer.php';
            include 'menu.php';
            ?>
        </div>
    </body>
</html>