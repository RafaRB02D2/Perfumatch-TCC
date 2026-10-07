<?php
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Noir Extreme Parfum";

// LOGIN
$logado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Noir Extreme Parfum</title>

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

<h2 class="titulo-centro">Noir Extreme Parfum</h2>

<div class="perfume-detalhe">

<!-- ESQUERDA -->

<div class="bloco">

<img class="logo-marca" src="/perfumatch/uploads/marcas/tom ford.png">

<img class="img-perfume" src="/perfumatch/uploads/noir extreme parfum.jfif">

<div class="info">

<p><strong>Gênero:</strong> Masculino</p>

<p><strong>Ocasião:</strong> Noite • Encontros • Clima ameno</p>

<p><strong>Fixação:</strong> 8–10h</p>

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

<img src="/perfumatch/uploads/notas/cardamomo.png">

<span>Cardamomo</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/gengibre.png">

<span>Gengibre</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/mandarina.png">

<span>Mandarina</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/neroli.png">

<span>Néroli</span>

</div>

</div>

<h4>Coração</h4>

<div class="notas">

<div class="nota">

<img src="/perfumatch/uploads/notas/rosa.png">

<span>Rosa</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/jasmim.png">

<span>Jasmim</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/flordelaranjeira.png">

<span>Flor de Laranjeira</span>

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

<img src="/perfumatch/uploads/notas/couro.png">

<span>Couro</span>

</div>

<div class="nota">

<img src="/perfumatch/uploads/notas/favatonka.png">

<span>Tonka</span>

</div>

</div>

</div>

<!-- DIREITA -->

<div class="bloco">

<h3>Preço</h3>

<div class="preco">

R$ 1.500 – R$ 2.500

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
Noir Extreme Parfum é uma fragrância doce e especiada, marcada pelo contraste entre cardamomo, gengibre e mandarina na abertura. No coração, o kulfi traz uma faceta cremosa e gourmand, acompanhado por rosa, jasmim e flor de laranjeira. A base combina baunilha, âmbar, couro e tonka, criando uma assinatura quente, sofisticada e extremamente envolvente.
</p>

<h3>Inspirados</h3>

<ul class="inspirados">

<li>Perfumes doces e especiados para noites</li>

<li>Fragrâncias gourmand sofisticadas e envolventes</li>

<li>Perfumes marcantes para encontros e ocasiões especiais</li>

</ul>

</div>

</div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>