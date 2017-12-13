<?php
//funcaoconectaPDO1.php
//função que linka banco com pdo.
function PDO_CONECT(){
  $PDO = new PDO('mysql:host =' . ENDERECO .';dbname=' . DBname . ";charset=utf8", USUARIO, SENHA);
  return $PDO;
}
 ?>
 
