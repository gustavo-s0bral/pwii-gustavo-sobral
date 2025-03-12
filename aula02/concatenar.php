<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-weight: 900;
            color: #ff0000;
        }
        h1{
            color: #ff00ff
        }
        #nome{
            color: #0f0
        }
        body{
            background-color: #0B4C5F
        }
    </style>
</head>
<body>
    <p> Gustavo Rafael do Nascimento Sobral </p>
</body>
</html>
<?php 
    $oibb = "Hello World! <br>";
    ECHO "${oibb}";
    echo "${oibb}";
    Echo "${oibb}";

    $nome = "Gustavo";
    $sobrenome = "Gostoso";
    $numero = 24.69101;

    echo "${nome} <h1> ${sobrenome} </br>";
    echo $numero . "<p> " . $nome . 
    " " . $sobrenome . "</p>";

?>