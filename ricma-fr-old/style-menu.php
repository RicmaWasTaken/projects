<?php
    echo "
    <!--début style pour menu-->
    <style>
        .mobile{
            display: none;
        }
        @media only screen and (max-width : 940px){
            .mobile{
                display: unset;
            }
            .mobile.menu-couvrant{
                display: block;
                position: fixed;
                text-align: center;
                background-color: #222831;
                width: 100vw;
                height: calc(100vh - 102px);
                top: 102px;
                left: 100vw;
                transition: left 0.4s;
            }
            .mobile.div-menu{
                position: relative;
                display: block;
                text-align: center;
                top: 60px;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                height: 50%;
            }
            .mobile.menu-nav{
                position: relative;
                display: flex !important;
                list-style-type: none;
                padding: 0;
                margin: 0;
                flex-direction: column;
                justify-content: space-between;
                height:45vh;
            }
            .mobile.element-menu a{
                font-size: 33px;
                font-family: michroma;
                text-decoration: none;
                color: aqua;
            }
            .mobile.element-menu a:active{
                color: whitesmoke;
            }
            .mobile.element-menu a:hover{
                color: whitesmoke;
            }
            .cv-mobile{
                margin: 0 30vw 0 30vw;
            }
            .cv-mobile:active{
                border-color: whitesmoke;
                color: whitesmoke;
            }
            .cv-mobile:hover{
                border-color: whitesmoke;
                color: whitesmoke;
            }
            .cv-mobile>a{
                border: 3px aqua solid;
                padding: 5px 30px 5px 30px;
                border-radius: 5px;
            }
            .mobile.menu-reseaux{
                position: relative;
                display: block;
                height: 10%;
                top: 20vh;
                text-align: center;
                width: 100%;
            }
            .mobile.liste-reseaux{
                display: inline-flex !important;
                width: max-content;
                text-align: center;
                flex-direction: row;
                gap: 80px;
                padding: 0;
                margin: 0;
            }
            .mobile.reseaux{
                list-style-type: none;
            }
            .mobile.reseaux img{
                height: 60px;
                width: 60px;
            }
        }
        @media only screen and (max-width: 650px) {
            .mobile{
                display: unset;
            }
            .mobile.liste-reseaux{
                gap: 50px;
            }
            .mobile.reseaux img{
                height: 45px;
                width: 45px;
            }
        }
        </style>
        <!--fin style pour menu-->
    "
?>