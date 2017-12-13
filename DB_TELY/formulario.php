<?php

require_once 'infpdo.php';

$cliente = isset ($_POST['cliente']) ? $_POST['cliente']: null;
$mes = isset($_POST['mes']) ? $_POST['mes']:null;
$trecho = isset($_POST['trecho']) ? $_POST['trecho']:null;
$data_inicio = isset($_POST['data_inicio']) ? $_POST['data_inicio']:null;
$data_fim = isset($_POST['data_fim']) ? $_POST['data_fim']:null;
$problema = isset($_POST['problema']) ? $_POST['problema']:null;

if (empty($cliente)) || empty($mes) || empty($trecho) || empty(data_inicio) || empty(data_fim) || empty(problema) {
    echo "Volte e preencha todos os campos por favor, toda informação aqui é valiosa!";
    exit;
}
$PDO = PDO_CONECT();

$banco_cadastro = "INSERT INTO indisponibilidade(cliente,mes,trecho,data_inicio,data_fim,problema)
VALUES (:cliente,:mes,:trecho,:data_inicio,:data_fim,:problema";

$inserir_banco = $PDO->prepare($banco_cadastro);
$inserir_banco = bindPAram(':cliente',$cliente);
$inserir_banco = bindPAram(':mes',$mes);
$inserir_banco = bindPAram('trecho',$trecho);
$inserir_banco = bindPAram('data_inicio',$data_inicio);
$inserir_banco = bindPAram('data_fim',$data_fim);
$inserir_banco = bindPAram('problema',$problema);

if ($inserir_banco->execute()) {
header('Location:formulariohtml.php');
    
}else{
    echo "erro ao cadastrar! verificar com administrador";
    print_r($inserir_banco->errorInfo());
}

?>

