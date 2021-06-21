<?php

$text = 
"Vivere 
È passato tanto tempo 
Vivere
È un ricordo senza tempo 
Vivere 
È un po' come perder tempo 
Vivere e sorridere
Vivere 
È passato tanto tempo 
Vivere 
È un ricordo senza tempo 
Vivere! 
È un po' come perder tempo 
Vivere e sorridere dei guai 
Così come non hai fatto mai 
E poi pensare che domani sarà sempre meglio
Oggi non ho tempo 
Oggi voglio stare spento
Vivere
E sperare di star meglio 
Vivere 
E non essere mai contento 
Vivere 
Come stare sempre al vento 
Vivere, come ridere
Vivere (vivere)
Anche se sei morto dentro 
Vivere (vivere)
E devi essere sempre contento
Vivere (vivere)
È come un comandamento 
Vivere o sopravvivere 
Senza perdersi d'animo mai 
E combattere e lottare contro tutto contro
Oggi non ho tempo 
Oggi voglio stare spento
Vivere, vivere (vivere)
E sperare di star meglio 
Vivere, vivere (vivere)
E non essere mai contento 
Vivere, vivere (vivere)
E restare sempre al vento a 
Vivere e sorridere dei guai 
Proprio come non hai fatto mai 
E pensare che domani sarà sempre meglio";

$textLenght = strlen($text);

$word = $_GET["word"];

$textModified = str_ireplace ($word, "***", $text);

$textLenghtModified = strlen($textModified);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>

<h1>TESTO ORIGINALE:</h1>

<p><?php echo $text ?></p>

<p><?php echo $textLenght ?></p>

<h1>TESTO MODIFICATO:</h1>

<p><?php echo $textModified ?></p>

<p><?php echo $textLenghtModified ?></p>
    
    

</body>
</html>