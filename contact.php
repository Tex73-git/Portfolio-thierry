<?php

$retour = mail("administratif@planete-digitale.fr", "essai", "coucou");
if ($retour) {
    echo "<p>le mail a bien été envoyez</p>";
}