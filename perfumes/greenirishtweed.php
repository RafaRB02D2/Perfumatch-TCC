<?php
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Green Irish Tweed";

// LOGIN
$logado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Green Irish Tweed</title>

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

<h2 class="titulo-centro">Green Irish Tweed</h2>

<div class="perfume-detalhe">

<!-- ESQUERDA -->

<div class="bloco">

<img class="logo-marca" src="/perfumatch/uploads/marcas/creed.png">

<img class="img-perfume" src="/perfumatch/uploads/green irish tweed.jfif">

<div class="info">

<p><strong>Gênero:</strong> Masculino</p>

<p><strong>Ocasião:</strong> Uso diário • Trabalho • Ocasiões elegantes</p>

<p><strong>Fixação:</strong> 7–10h</p>

<p><strong>Projeção:</strong> 3–5h</p>

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

<span>Verbena</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/iris.png">

<span>Íris</span>

</div>

</div>

<h4>Coração</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/violeta.png">

<span>Violeta</span>

</div>

</div>

<h4>Base</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/sandalo.png">

<span>Sândalo</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/ambar.png">

<span>Âmbar Cinzento</span>

</div>

</div>

</div>

<!-- DIREITA -->

<div class="bloco">

<h3>Preço</h3>

<div class="preco">

R$ 2.000 – R$ 3.400

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
Green Irish Tweed é uma fragrância verde, clássica e extremamente elegante. A abertura de verbena e íris traz uma sensação fresca e natural, enquanto a violeta acrescenta um aspecto floral delicado. Na base, o sândalo e o âmbar cinzento proporcionam profundidade e sofisticação, criando um perfume atemporal e refinado para o trabalho, uso diário e ocasiões elegantes.
</p>

<h3>Inspirados</h3>

<ul class="inspirados">

<li>Perfumes verdes clássicos e sofisticados</li>

<li>Fragrâncias frescas com perfil elegante e atemporal</li>

<li>Perfumes versáteis para trabalho e uso diário</li>

</ul>

</div>

</div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>