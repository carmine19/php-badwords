<?php


$paragrafo = 'lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. lorem è molto utile';
$nome = $_GET['nome'];
$paragrafo_censurato = str_replace($nome, '***', $paragrafo);
$lunghezza_paragrafo_originale = strlen($paragrafo)

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-badwords</title>
</head>
<body>

<h1> <?php echo $paragrafo_censurato ?> </h1>

<p><strong>Lunghezza Paragrafo originale <?php var_dump($lunghezza_paragrafo_originale);?></strong></p>



</body>
</html>
