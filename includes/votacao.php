<?php

$nome_seguro = mysqli_real_escape_string($conexao, $perfume_nome);

$sql = "SELECT AVG(nota) AS media, COUNT(*) AS total
        FROM avaliacoes
        WHERE nome_perfume = '$nome_seguro'";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro ao consultar avaliação: " . mysqli_error($conexao));
}

$dados = mysqli_fetch_assoc($resultado);

$media = $dados['media'] !== null ? round($dados['media'], 1) : 0;
$total = $dados['total'];

?>

<div class="avaliacao-media">

    <p>
        <strong>
            <?php echo $media; ?>/5
        </strong>
        ⭐
    </p>

    <p>
        <?php echo $total; ?> avaliação(ões)
    </p>

</div>