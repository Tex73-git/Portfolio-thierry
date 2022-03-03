<?php

    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via le formulaire de contact du site portfolio-thierry.fr
        Name : " . $_POST["name"] . "
        Firstname : " . $_POST["firstname"] . "
        Email : " . $_POST["email"] . "
        Sujet : " . $_POST["sujet"] . "
        Message :" . $_POST["message"];

        $retour = mail("administratif@planete-digitale.fr", $_POST["sujet"], $message,
        "From:contact@portfolio-thierry.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);

        if ($retour) {
            echo !alert() "<p>L'email a bien été envoyez !</p>";
        }
    }