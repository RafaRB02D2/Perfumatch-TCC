<?php
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Tonka";

// LOGIN
$logado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Tonka</title>

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

<h2 class="titulo-centro">Tonka</h2>

<div class="perfume-detalhe">

<!-- ESQUERDA -->

<div class="bloco">

<img class="logo-marca" src="/perfumatch/uploads/marcas/granado.png">

<img class="img-perfume" src="/perfumatch/uploads/tonka.jfif">

<div class="info">

<p><strong>Gênero:</strong> Unissex</p>

<p><strong>Ocasião:</strong> Noite • Clima ameno • Clima frio</p>

<p><strong>Fixação:</strong> 8–9h</p>

<p><strong>Projeção:</strong> 2h média</p>

<p><strong>Tipo de pele:</strong> Todas</p>

</div>

</div>

<!-- CENTRO -->

<div class="bloco">

<h3>Pirâmide Olfativa</h3>

<h4>Topo</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/coco.png">

<span>Coco</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/canela.png">

<span>Canela</span>

</div>

</div>

<h4>Coração</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/tonka.png">

<span>Tonka</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/coco.png">

<span>Coco</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/madeiradeambar.png">

<span>Madeira de Âmbar</span>

</div>

</div>

<h4>Base</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/baunilha.png">

<span>Baunilha</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/ambar.png">

<span>Âmbar</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/almiscar.png">

<span>Almíscar</span>

</div>

</div>

</div>

<!-- DIREITA -->

<div class="bloco">

<h3>Preço</h3>

<div class="preco">

R$ 120 – R$ 200

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
Tonka é uma fragrância cremosa, aconchegante e envolvente, que combina a doçura da fava tonka com o conforto do coco e da canela. A evolução traz uma faceta ambarada e amadeirada sofisticada, enquanto a baunilha, o âmbar e o almíscar criam um fundo quente, macio e sensual. Uma fragrância elegante e confortável, especialmente indicada para noites e dias de clima ameno ou frio.
</p>

<h3>Inspirados</h3>

<ul class="inspirados">

<li>Perfumes doces e cremosos à base de Fava Tonka</li>

<li>Fragrâncias ambaradas e aconchegantes</li>

<li>Perfumes sofisticados para clima frio</li>

</ul>

</div>

</div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>