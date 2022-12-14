<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

        // Declarer une variable en php
        $age_samuel = 5;
        $age_eddy = 20;
        // "echo" permet d'afficher sur la page 
        echo $age_samuel;
        // Concatener des variables 
        echo $age_samuel  .''.  $age_eddy;
        // ou 
        echo $age_samuel + $age_eddy;

        // TABLEAUX

        $identitePersonneA = array(
            'key' => true,
            'prenom' => 'Samuel',
        );

        echo $identitePersonneA['prenom'];

   ?>
</body>
</html>
