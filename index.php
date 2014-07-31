<?php

$adjektiv = array(
    'konzentrierte',
    'integrierte',
    'permanente',
    'systematisierte',
    'progressive',
    'funktionelle',
    'orientierte',
    'synchrone',
    'qualifizierte',
    'ambivalente'
);
$subjektAnfang = array(
    'Führungs',
    'Organisations',
    'Identifikations',
    'Drittgenerations',
    'Koalitions',
    'Fluktations',
    'Übergangs',
    'Wachstums',
    'Aktions',
    'Interpretations'
);
$subjektEnde = array(
    'struktur',
    'flexibilität',
    'ebene',
    'tendenz',
    'programmierung',
    'konzeption',
    'phase',
    'potenz',
    'problematik',
    'kontigenz'
);

$zahl = str_pad(rand(0, 999), 3, 0, STR_PAD_LEFT);
$zahlArray = str_split($zahl);

$ausgabe = $adjektiv[$zahlArray[0]] . " " . $subjektAnfang[$zahlArray[1]] . $subjektEnde[$zahlArray[2]];

//echo $ausgabe;
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Powerpoint Generator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('img/bg.jpg')">
<h1 style="transform:translateX(-50%) translateY(-50%); position: absolute; top: 40%; left: 50%; width: 1000px; font-family: 'Dancing Script', cursive; font-size: 100px; text-align: center;"><?php echo ucfirst($ausgabe); ?></h1>
</body>
</html>