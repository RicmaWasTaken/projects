<?php
    echo '
    <!--début style base-->
        <style>
            html{
                width:100vw;
                height:max-content;
            }
            body{
                width:100%;
                height:100%;
                background-color: #222831;
                margin: 0;
                overflow-x: hidden;
            }
            .page{
                position: relative;
                width: 100vw;
                height: max-content;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            main{
                flex: 1;
                margin-top:100px;
            }
            @font-face {
                font-family: michroma;
                src: url(michroma.ttf);
            }
        </style>
        <!--fin style base-->
    '
?>