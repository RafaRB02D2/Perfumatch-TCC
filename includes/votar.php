<?php

require_once("conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /perfumatch/perfil/entrar.php");
    exit;
}

if (!isset($_POST['perfume']) || !isset($_POST['nota'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

$perfume = mysqli_real_escape_string($conexao, $_POST['perfume']);
$nota = intval($_POST['nota']);
$usuario_id = intval($_SESSION['usuario_id']);

if ($nota < 1 || $nota > 5) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

$sql = "INSERT INTO avaliacoes 
        (id_usuario, nome_perfume, nota)
        VALUES 
        ($usuario_id, '$perfume', $nota)";

if (!mysqli_query($conexao, $sql)) {
    die("Erro ao salvar avaliação: " . mysqli_error($conexao));
}

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>