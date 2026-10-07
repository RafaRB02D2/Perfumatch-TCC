<?php
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Vetiver";

// LOGIN
$logado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Vetiver</title>

<link rel="stylesheet" href="/perfumatch/includes/style.css">
<link rel="stylesheet" href="/perfumatch/perfumes/perfumes.css">

<style>

.estrelas-input{
display:flex;
flex-direction:row-reverse;
justify-content:center;
}

.estrelas-input input{
display:none;
}

.estrelas-input label{
font-size:30px;
color:#444;
cursor:pointer;
transition:.2s;
}

.estrelas-input input:checked ~ label,
.estrelas-input label:hover,
.estrelas-input label:hover ~ label{
color:gold;
}

</style>

</head>

<body>

<div class="conteudo-principal">

<h2 class="titulo-centro">Vetiver</h2>

<div class="perfume-detalhe">

<!-- ESQUERDA -->

<div class="bloco">

<img class="logo-marca" src="/perfumatch/uploads/marcas/phebo.png">

<img class="img-perfume" src="/perfumatch/uploads/vetiver.jfif">

<div class="info">

<p><strong>Gênero:</strong> Unissex</p>

<p><strong>Ocasião:</strong> Dia • Trabalho • Uso casual</p>

<p><strong>Fixação:</strong> 6–8h</p>

<p><strong>Projeção:</strong> 1–2h média</p>

<p><strong>Tipo de pele:</strong> Todas</p>

</div>

</div>

<!-- CENTRO -->

<div class="bloco">

<h3>Pirâmide Olfativa</h3>

<h4>Topo</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/notasverdes.png">

<span>Algas Marinhas</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/salvia.png">

<span>Sálvia</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/limao.png">

<span>Limão</span>

</div>

</div>

<h4>Coração</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/lirio.png">

<span>Lírio-do-Vale</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/geranio.png">

<span>Magnólia</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/rosa.png">

<span>Rosa</span>

</div>

</div>

<h4>Base</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/vetiver.png">

<span>Vetiver</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/favatonka.png">

<span>Fava Tonka</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/cedro.png">

<span>Cedro</span>

</div>

</div>

</div>

<!-- DIREITA -->

<div class="bloco">

<h3>Preço</h3>

<div class="preco">

R$ 140 – R$ 290

</div>

<h3>Avaliação</h3>

<?php if($logado){ ?>

<form method="POST" action="/perfumatch/includes/votar.php">

<input type="hidden" name="perfume" value="<?php echo $perfume_nome; ?>">

<div class="estrelas-input">

<input type="radio" name="nota" value="5" id="e5">
<label for="e5">★</label>

<input type="radio" name="nota" value="4" id="e4">
<label for="e4">★</label>

<input type="radio" name="nota" value="3" id="e3">
<label for="e3">★</label>

<input type="radio" name="nota" value="2" id="e2">
<label for="e2">★</label>

<input type="radio" name="nota" value="1" id="e1">
<label for="e1">★</label>

</div>

<button type="submit" style="margin-top:10px;">
Avaliar
</button>

</form>

<?php } else { ?>

<p style="color:orange;">
Faça login para avaliar
</p>

<?php } ?>

<?php include("../includes/votacao.php"); ?>

<h3>Favoritar</h3>

<?php if($logado){ ?>

<form method="POST" action="/perfumatch/favoritar.php">

<input type="hidden" name="perfume" value="<?php echo $perfume_nome; ?>">

<button type="submit">
❤️ Favoritar
</button>

</form>

<?php } else { ?>

<p style="color:orange;">
Faça login para favoritar
</p>

<?php } ?>

<h3>Sensação</h3>

<p class="sensacao">
Vetiver é uma fragrância fresca, verde e elegante, que combina a sensação refrescante das algas marinhas e do limão com a sofisticação aromática da sálvia. No coração, lírio-do-vale, magnólia e rosa acrescentam um toque floral delicado e equilibrado. A base de vetiver, fava tonka e cedro traz profundidade amadeirada e um conforto suave, criando uma fragrância versátil, limpa e sofisticada para diferentes ocasiões.
</p>

<h3>Inspirados</h3>

<ul class="inspirados">

<li>Perfumes frescos e verdes com destaque para o vetiver</li>

<li>Fragrâncias cítricas e aromáticas sofisticadas</li>

<li>Perfumes versáteis para o dia a dia</li>

</ul>

</div>

</div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>