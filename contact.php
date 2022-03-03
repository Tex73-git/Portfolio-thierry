<?php

    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via le formulaire de contact du site portfolio-thierry.fr
        Name : " . $_POST["name"] . "
        Firstname : " . $_POST["firstname"] . "
        Email : " . $_POST["email"] . "
        Sujet : " . $_POST["sujet"] . "
        Message :" . $_POST["message"];

        $retour = mail("steeldigitale@gmail.com", $_POST["sujet"], $message,
        "From:contact@portfolio-thierry" . "\r\n" . "Reply-to:" . $_POST["email"]);

        if ($retour) {
            echo "<p>Succées</p>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
            }
            .home {
                display: flex;
                justify-content: space-around;
                height: 100vh;
                color: #111;
                min-height: 500px;
                font-family: 'Raleway', sans-serif;
            }
            .home .home-content {
            background: grey;
            height: 200px;
            width: 600px;
            opacity: 0.8;
            border-radius: 6px;
            }
            p {
                font-size: 35px;
                text-align: center;
                margin-top: 50px;
            }
            a {
                display: flex;
                font-size: 20px;
                padding: 12px 36px;
                color: #fff;
                background: #FFA552;
                margin-top: 20px;
                justify-content: center;
            }
        </style>
        <title>Validation Email</title>
    </head>
    <body>
    <section class="home">
        <div class="home-content">
            <p>Bravo, l'email a bien été envoyez !</p>
            <a href="index.html">Retour au site</a>
        </div>
    </section>
    </body>
    </html>