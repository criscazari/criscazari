<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="php.ico" type="image/x-icon"/>
    <title>Aprendendo PHP</title>
</head>
<body>
    
<?php

date_default_timezone_set('America/Sao_Paulo');
	
echo 'Olá mundo ! ';
echo '</br>';
echo "Hoje é dia: " .date('d/m/Y');
echo '</br>';
echo " agora são: " .date('H:i:s');

?>

</body>
</html>