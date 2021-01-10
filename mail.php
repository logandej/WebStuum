<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('logan.dejesus1@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : https://logandej.github.io/WebStuum/');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>