<?php
    echo '
    <!--début header-->
            <header class="header">
                <div class="wrapper-header">
                    <div class="desktop bwet">
                        <div class="desktop logo">
                            <a href="index.php"><img src="../media/RicmaLogo-WA.png" alt="Logotype de ricma"></a>
                        </div>
                    </div>
                    <nav class="desktop nav">
                        <ul>
                            <li><a href="about.php">À propos</a></li>
                            <li><a href="projects.php">Projets</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="desktop"><a href="ressources/CV-RicardoMARQUES.pdf" class="cv">CV</a></li>
                        </ul>
                        <a href="/en/index.php" class="langue"><img src="media/english.png" alt="drapeau menant vers la version anglaise du site"></a>
                    </nav>
                    <div class="burger" onclick="burger(this);menu()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </header>
            <!--fin header-->
    ';
?>