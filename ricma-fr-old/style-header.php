<?php
    echo "
    <!--style pour header-->
        <style>
            header{
                background-color: #222831;
                height: 100px;
                width: 100vw;
                position: fixed;
                display: block;
                left: 0;
                top: 0;
                margin-bottom: 10vh;
                border-bottom: 3px solid aqua;
                z-index: 4;
            }
            .wrapper-header{
                position: relative;
                height: 100%;
                width: 100%;
            }
            .bwet{
                position:absolute;
                left:10vw;
                top:20px;
                display: inline-block;
            }
            .logo img{
                width:150px;
            }
            .nav{
                position: absolute;
                display: flex;
                flex-direction: row;
                gap: 50px;
                top: 35px;
                right: 60px;
                color:whitesmoke;
                width:max-content;
                font-size: 19px;
                font-family: michroma;
            }
            .nav ul{
                display: flex;
                list-style: none;
                gap: 4.5vw;
                padding: 0;
            }
            .nav ul li{
                width: max-content;
                height: max-content;
            }
            .nav ul a{
                display:inline;
                list-style: none;
                margin-left: 50px;
                margin-right: 50px;
                text-decoration: none;
                color:aqua;
                margin:0px;
            }
            .nav ul li:not(:last-child) a:hover{
                color: whitesmoke;
            }
            .cv{
                color:aqua;
                border: 3px solid;
                border-color: aqua;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-right: 25px;
                padding-left: 25px;
                border-radius:5px;
            }
            .cv:hover{
                color: whitesmoke;
                border-color: whitesmoke;
            }
            .cv:hover a{
                color: whitesmoke;
                border-color: whitesmoke;
            }
            .langue{
                display: inline;
                height: 50px;
                width: max-content;
                margin: auto 0 auto 0;
            }
            .langue>img{
                height: 50px;
                width: auto;
            }
            .burger{
                display: none;
            }
            @media only screen and (max-width : 940px){
                .desktop.nav{
                    display: none;
                }
                .burger{
                    display: block;
                    position: absolute;
                    top: 48px;
                    color:whitesmoke;
                    width:auto;
                    right: 7vw;
                }
                .burger:hover{
                    cursor: pointer;
                }
                .bar1, .bar2, .bar3 {
                    width: 35px;
                    height: 5px;
                    background-color: #ffffff;
                    margin: 6px 0;
                    transition: 0.4s;
                } 
                .change .bar1 {
                    transform: translate(0, 11px) rotate(-45deg);
                }
                .change .bar2 {
                    opacity: 0;
                }
                .change .bar3 {
                    transform: translate(0, -11px) rotate(45deg);
                }
            }
             @media only screen and (max-width: 650px) {
                body {
                  overflow-x: hidden;
                }
                .logo img{
                    width: 17vw;
                    min-width: 150px;
                }
             } 
        </style>
            <!-- fin style pour header-->
    "
?>