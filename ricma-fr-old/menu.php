<?php
    echo 
    '
<!--début menu mobile-->
<div class="mobile menu menu-couvrant" id="menu-mobile">
    <div class="mobile menu div-menu">
        <ul class="mobile menu menu-nav">
            <li class="mobile menu element-menu"><a href="about.php">À propos</a></li>
            <li class="mobile menu element-menu"><a href="projects.php">Projets</a></li>
            <li class="mobile menu element-menu"><a href="contact.php">Contact</a></li>
            <li class="mobile menu element-menu cv-mobile"><a href="ressources/CV-RicardoMARQUES.pdf">CV</a></li>
        </ul>
    </div>
    <div class="mobile menu menu-reseaux">
        <ul class="mobile menu liste-reseaux">
            <li class="mobile menu reseaux"><a href="https://www.linkedin.com/in/ricardo-marques-madail/"><img src="media/linkedin.png" alt="Lien vers page linkedin de Ricardo Marques"></a></li>
            <li class="mobile menu reseaux"><a href="https://github.com/ricmawastaken"><img src="media/github.png" alt="Lien vers page github de Ricardo Marques"></a></li>
            <li class="mobile menu reseaux"><a href="https://www.instagram.com/ricma.fr/"><img src="media/instagram.png" alt="Lien vers page instagram de Ricma"></a></li>
        </ul>
    </div>
    <div class="flagounette">
        <a href="en/index.php"><img src="media/english.png" alt="drapeau menant vers la verison anglaise du site"></a>
    </div>
</div>
<script>
    function burger(x){
        x.classList.toggle("change");
    }

    var help = 0

    function menu(){
        var elements = document.getElementsByClassName("menu-couvrant")[0];
        if (help == 0) {
            elements.style.left = "0";
            help = help+1
            console.log("help est 0 (" + help + ") et le menu n\'a pas peur");
            console.log(help)
        } else {
            elements.style.left = "100vw";
            help = help-1
            console.log("help est 1 (" + help + ") et le menu a peur");
            console.log(help)
            console.error("ah bah non y\'a pas d\'erreur, mon code est impéc ;)")
        }
    }
</script>
<!--fin menu mobile-->
    '
?>