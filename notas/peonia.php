<?php

require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Peônia";
$logado = isset($_SESSION['usuario_id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nota Olfativa - <?php echo $nota_nome; ?></title>

<link rel="stylesheet" href="/perfumatch/includes/style.css">
<link rel="stylesheet" href="/perfumatch/notas/notas.css">

<style>

/* ESTRUTURA PRINCIPAL */
.nota-detalhe {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}

.nota-detalhe .bloco {
    flex: 1;
    min-width: 280px;
    max-width: 380px;
    background: #1a1a1a;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    color: #fff;
}

/* IMAGEM */
.img-nota-principal {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* FAMÍLIA */
.tag-familia {
    display: inline-block;
    padding: 6px 14px;
    background-color: #ad6282;
    color: #fff;
    font-weight: bold;
    border-radius: 20px;
    font-size: 0.9em;
    margin-bottom: 15px;
    text-transform: uppercase;
}

/* LISTA DE OCASIÕES */
.lista-ocasiao {
    list-style: none;
    padding: 0;
    margin: 0;
}

.lista-ocasiao li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    background: #2a2a2a;
    padding: 10px 14px;
    border-radius: 6px;
    font-size: 0.95em;
}

.lista-ocasiao span.icone {
    font-size: 1.2em;
}

/* TÍTULOS */
.bloco h3 {
    border-bottom: 2px solid #333;
    padding-bottom: 8px;
    margin-top: 0;
    color: #f1c40f;
}

/* BADGES */
.badge-posicao {
    background: #333;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.85em;
    color: #ddd;
}

/* SENSAÇÃO */
.sensacao {
    font-style: italic;
    color: #d7ccc8;
    line-height: 1.5;
}

</style>

</head>

<body>

<div class="conteudo-principal">

<h2 class="titulo-centro">
    Nota Olfativa: <?php echo $nota_nome; ?>
</h2>

<div class="nota-detalhe">

<!-- ESQUERDA: IMAGEM, FAMÍLIA E CLASSIFICAÇÃO -->

<div class="bloco">

<img
    class="img-nota-principal"
    src="/perfumatch/uploads/notas/peonia.png"
    alt="<?php echo $nota_nome; ?>"
>

<span class="tag-familia">
    Floral / Fresca / Romântica
</span>

<div class="info">

<p>
<strong>Origem:</strong>
Natural, proveniente principalmente das flores de espécies do gênero
<i>Paeonia</i>. Em perfumaria moderna, também pode ser reproduzida por
acordes sintéticos devido à dificuldade de extrair seu óleo essencial
diretamente das flores.
</p>

<p>
<strong>Classificação:</strong>
Nota de Coração (Middle Note)
</p>

<p>
<strong>Volatilidade:</strong>
Média. Possui presença delicada e elegante, desenvolvendo-se no coração
da fragrância e contribuindo para uma sensação floral limpa, fresca e
sofisticada.
</p>

<p>
<strong>Posições Comuns na Pirâmide:</strong>
</p>

<div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">

<span class="badge-posicao">
    Coração (Extremamente Comum)
</span>

<span class="badge-posicao">
    Saída (Ocasional)
</span>

</div>

</div>

</div>


<!-- CENTRO: DESCRIÇÕES -->

<div class="bloco">

<h3>Descrição Técnica</h3>

<p>
A Peônia apresenta um perfil floral delicado, fresco e levemente
adocicado. Seu aroma combina facetas de pétalas úmidas, flores recém-abertas
e uma sensação aquosa e limpa. Dependendo da composição, pode apresentar
nuances levemente rosadas, frutadas, verdes e atalcadas.
</p>

<h3>Descrição Prática</h3>

<p>
Na perfumaria, a Peônia é utilizada principalmente para trazer
luminosidade, delicadeza e frescor às fragrâncias. É muito comum em
perfumes femininos e românticos, funcionando especialmente bem ao lado
de rosas, frutas, almíscar e notas cítricas. Também pode suavizar
composições mais intensas, deixando o perfume mais elegante e confortável.
</p>

<h3>Sensação Transmitida</h3>

<p class="sensacao">
Transmite uma sensação de delicadeza, feminilidade, limpeza e romantismo.
Evoca um jardim florido em uma manhã fresca de primavera, com pétalas
macias, orvalho e uma atmosfera leve e sofisticada.
</p>

</div>


<!-- DIREITA: OCASIÕES E COMBINAÇÕES -->

<div class="bloco">

<h3>Exemplos de Ocasiões</h3>

<p style="font-size: 0.9em; color:#aaa; margin-bottom:15px;">

Momentos e situações perfeitas para fragrâncias que destacam
a nota de <?php echo $nota_nome; ?>:

</p>

<ul class="lista-ocasiao">

<li>

<span class="icone">🌸</span>

<div>

<strong>Primavera e Dias Amenos</strong><br>

<small style="color:#aaa;">
Seu perfil floral, fresco e delicado combina perfeitamente
com temperaturas amenas e ambientes abertos.
</small>

</div>

</li>


<li>

<span class="icone">☀️</span>

<div>

<strong>Dia a Dia, Trabalho e Escola</strong><br>

<small style="color:#aaa;">
É uma nota elegante e confortável, geralmente agradável
para ambientes onde uma fragrância muito pesada não é ideal.
</small>

</div>

</li>


<li>

<span class="icone">💕</span>

<div>

<strong>Encontros Românticos</strong><br>

<small style="color:#aaa;">
Seu caráter floral e delicado cria uma aura feminina,
romântica e extremamente agradável.
</small>

</div>

</li>


<li>

<span class="icone">🌷</span>

<div>

<strong>Eventos Durante o Dia</strong><br>

<small style="color:#aaa;">
Funciona muito bem em ocasiões sociais, almoços,
passeios e eventos que pedem elegância sem exagero.
</small>

</div>

</li>

</ul>


<h3 style="margin-top:25px;">
Combinações Perfeitas
</h3>

<p style="font-size:0.9em;">

Harmoniza perfeitamente com:

<strong>
Rosa, Jasmim, Peônia, Framboesa, Lichia,
Bergamota, Almíscar, Baunilha e Cedro.
</strong>

</p>

</div>

</div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>

