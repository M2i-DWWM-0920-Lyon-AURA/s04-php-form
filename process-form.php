<?php

// Si les informations reçues contiennent bien un e-mail
if (isset($_GET['email'])
// ET l'e-mail a bien le format d'un e-mail
    && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)
// ET les informations reçues contiennent bien une raison
    && isset($_GET['reason'])
// ET la raison est bien un nombre
    && is_numeric($_GET['reason'])
// ET la raison est comprise entre 1 et 4
    && $_GET['reason'] >= 1 && $_GET['reason'] <= 4
// ET les informations reçues contiennent bien un message
    && isset($_GET['message'])
// ET le message contient moins de 1000 caracatères
    && strlen($_GET['message']) <= 1000
) {
    $success = true;
// Sinon
} else {
    $success = false;
}

header('Location: index.php?success=' . $success);
