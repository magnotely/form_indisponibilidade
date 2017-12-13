<?php
require 'infopdo.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indisponibilidades</title>
</head>
<body>

<div class = "formulario">
    <nav>
    <form action="formulario.php" method="POST">
    <label for="Cliente">Cliente Afetado:</label><input type="text" name="cliente" placeholder="Nome do cliente"><br><br>
    <label for="Mes">Mes:</label><input type="text" name="mes" placeholder="Digite o mês"><br><br>
    <label for="Trecho">Trecho:</label><input type="text" name="trecho" placeholder="Informe o Trecho"><br><br>
    <label for="Data_hora_inicio">Data de Data Inicio:</label><input type="datetime-local" name="data_inicio" placeholder="Informe a Data de Inicio"><br><br>
    <label for="Data_hora_fim">Data da Resolução:</label><input type="datetime-local" name="data_fim" placeholder="Informe a Data de Resolução"><br><br>
    <label for="Problema">Problema:</label><textarea name="Problema" placeholder="Detalhe o problema"></textarea><br><br>
    <button name="enviar" type="submit">enviar</button>
    </form>
</nav>
</div>
</body>
</html>