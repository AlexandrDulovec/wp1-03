<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$r = rand (0, 100);
define('PI', 3.14);;
 


// obsah kruhu
$area = PI * $r * $r;

// obvod kruhu
$circuit = 2 * PI * $r;


?>

<p>Obsah kruhu: <?= PI ?> * <?= $r ?> * <?= $r ?> = <?= $area ?> </p> 
<p>Obvod kruhu: <?= 2 ?> * <?= PI ?> * <?= $r ?> = <?= $circuit ?> </p> 
<p>Poloměr kruhu: <?= $r ?> </p> 
</body>
</html>