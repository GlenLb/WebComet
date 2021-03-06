<?php
    /**
     * Données reçues depuis le controlleur :
     * $title => titre de la page
     * $description => meta description de la page
     * $canonical => lien de l'URL canonique de la page
     */
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="public/css/prenoms/styles.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Font Awesome -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> -->

        <title><?php echo $title ?></title>
        <meta name="description" content=<?php echo $description ?> />
        <link rel="canonical" href=<?php echo $canonical ?> />

        <!-- Open Graph -->
        <meta property="og:title" content="<?php echo $title ?>" />
        <!-- <meta property="og:image" content="public/images/capture.png" /> -->
    </head>