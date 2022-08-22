<?php
// Variabile
$prohibitedWords = 'Zeus (in greco antico: Ζεύς, Zèus) nella religione greca è il re di tutti gli dèi, il capo dell Olimpo, dio del tuono. I suoi simboli sono la folgore, il toro, l aquila, la quercia e l olivo.

    Figlio del titano Crono e di Rea, è il più giovane dei suoi fratelli e sorelle: Estia, Demetra, Era, Ade e Poseidone. Nella maggior parte delle leggende o miti é sposato con Era (protettrice del matrimonio e dei figli), anche se nel santuario dell oracolo di Dodona come sua consorte si venerava Dione (viene raccontato nell Iliade che Zeus sia il padre di Afrodite, avuta con Dione).
    
    La figura equivalente a Zeus nella mitologia romana era Giove, mentre in quella etrusca era il dio Tinia';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Php</title>
</head>

<body>
    <h1>Badwords Php</h1>
    
    <div>

        <p>
            <?php
                echo $prohibitedWords;
            ?>
        </p>

        <pre>
            <?php
                echo ' length ' . strlen($prohibitedWords) . ' words';
            ?>
        </pre>
    </div>

    <div>

        <p>
            <?php
                echo str_replace('Zeus', '***', $prohibitedWords);
            ?>
        </p>

        <pre>
            <?php
                echo ' length ' . strlen($prohibitedWords) . ' words';
            ?>
        </pre>
    </div>
</body>

</html>