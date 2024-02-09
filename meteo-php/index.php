<?php
    $apiKey = [your_key_here];
    $input = $_POST['ville'];
    if($input == ""){
        echo "<script>console.log('input is empty')</script>";
    }else{
        echo "<script>console.log('input is $input')</script>";
        // API endpoint URL
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=$input&units=metric&appid=$apiKey";
        // Initialize cURL session
        $ch = curl_init($apiUrl);
        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Execute cURL session and fetch response
        $response = curl_exec($ch);
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo '<script>';
            echo 'alert(\'ça marche pas le curl\')';
            echo '</script>';
        } else {
            // Close cURL session
            curl_close($ch);
            // Decode JSON response
            $jsonData = json_decode($response, true);
            // Check if JSON decoding was successful
            if ($jsonData === null) {
                echo '<script>';
                echo 'alert(\'curl initié mais pas de réponse\')';
                echo '</script>';
                // Handle the error as needed
            } else {
                // Echo the JSON data as a JavaScript variable
                echo '<script>';
                echo 'apiData = ' . json_encode($jsonData) . ';';
                echo '</script>';
            }
        }
    }
?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Météo PHP</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
        <script src="meteo-php.js"></script>
        <style>
            marquee{
                position: fixed;
            }
            html, body{
                height: 100%;
                width: 100%;
                box-sizing: border-box;
                margin: 0;
            } 
            body{
                background-image: url(bg.jpg);
                background-size: cover;
                overflow-y: hidden;
            }
            main{
                margin: auto;
                width: 500px;
                max-width: 500px;
                height: 400px;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            h1, p{
                font-family: \'Josefin Sans\', sans-serif;
                color: white;
                text-align: center;
            }
            h1{
                font-size: 40px;
                text-shadow: 6px 6px 6px #aaa;
            }
            p{
                font-size: 25px;
                text-shadow: 6px 6px 6px #aaa;
            }
            input{
                margin: auto;
                display: block;
                text-align: center;
                font-family: \'Josefin Sans\', sans-serif;
                font-size: 20px;
                height: 40px;
                width: 80%;
                border-radius: 15px;
                
            }
            form{
                margin: 0;
            }
            div.intro{
                background-color: rgb(0, 0, 0, 0.6);
                border-radius: 50px;
                padding: 30px 0px;
            }
            div.boutons{
                width: 70%;
                display: flex;
                margin: auto;
                align-items: center;
                justify-content: space-evenly;
            }
            div.boutons img{
                height: 30px;
                width: auto;
                float: right;
            }
            div.resultats{
                background-color: rgba(54, 56, 77, 0.6);
                width: 400px;
                max-width: 400px;
                padding: 30px;
                border-radius: 50px;
                margin: auto;
                margin-top: 50px;
                position: relative;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
            }
            div.resultats img{
                width: 40%;
                height: 80%;
                position: relative;
            }
            div.resultats>*{
                width: 40%;
            }
            div.extremes>p{
                font-size: 20px;
            }
            @media only screen and (max-width:600px){
                body{
                    background-size: auto;
                }
                main{
                    width: 85%;
                }
                div.boutons{
                    width: 70%;
                }
                div.resultats{
                    width: 85%;
                }
            }
        </style>
    </head>
    <body>
        <main>
            <div class="intro">
                <h1>Prévisions météo</h1>
                <p>Où habitez-vous ?</p>
                <div class="boutons">
                    <form action="index.php" method="post" onsubmit="processForm()" id="formulaire">
                        <input type="text" name="ville" placeholder="ex: Strasbourg" id="ville">
                    </form>
                    <img src="arrow.png" alt="fléche pour lancer recherche" id="valider" onclick="processForm()">
                </div>
            </div>
            <div class="resultats" id="resultats">
                <div class="temperatures">
                    <p><span id="temp">-</span>°C</p>
                    <div class="extremes">
                        <p>Max : <span id="tempmax">-</span>°C</p>
                        <p>Min : <span id="tempmin">-</span>°C</p>
                    </div>
                </div>
                <img src="" alt="" id="icon">
            </div>
        </main>
    </body>
    </html>
