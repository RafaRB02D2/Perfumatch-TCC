<?php  
require_once("../includes/conexao.php"); 
require_once("../includes/header.php"); 
 
// DADOS DA NOTA 
$nota_nome = "Vinho"; 
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
 
    .img-nota-principal { 
      width: 100%; 
      height: 220px; 
      object-fit: cover; 
      border-radius: 8px; 
      margin-bottom: 15px; 
    } 
 
    .tag-familia { 
      display: inline-block; 
      padding: 6px 14px; 
      background-color: #8d6e63; 
      color: #fff; 
      font-weight: bold; 
      border-radius: 20px; 
      font-size: 0.9em; 
      margin-bottom: 15px; 
      text-transform: uppercase; 
    } 
 
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
 
    .bloco h3 { 
      border-bottom: 2px solid #333; 
      padding-bottom: 8px; 
      margin-top: 0; 
      color: #f1c40f; 
    } 
 
    .badge-posicao { 
      background: #333; 
      padding: 4px 8px; 
      border-radius: 4px; 
      font-size: 0.85em; 
      color: #ddd; 
    } 
 
    .sensacao { 
      font-style: italic; 
      color: #d7ccc8; 
      line-height: 1.5; 
    } 
  </style> 
</head> 
 
<body> 
 
<div class="conteudo-principal"> 
 
  <h2 class="titulo-centro">Nota Olfativa: <?php echo $nota_nome; ?></h2> 
 
  <div class="nota-detalhe"> 
 
    <!-- ESQUERDA: Imagem, Família e Classificação --> 
    <div class="bloco"> 
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/vinho.png" alt="<?php echo $nota_nome; ?>"> 
 
      <span class="tag-familia">Frutada / Alcoólica / Adocicada</span> 
 
      <div class="info"> 
        <p><strong>Origem:</strong> Uvas fermentadas, utilizadas como referência olfativa em acordes de vinho e bebidas alcoólicas.</p> 
        <p><strong>Classificação:</strong> Frutada, alcoólica, adocicada e levemente amadeirada.</p> 
        <p><strong>Volatilidade:</strong> Média, podendo apresentar boa presença no coração e fundo da fragrância.</p> 
 
        <p><strong>Posições Comuns na Pirâmide:</strong></p> 
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;"> 
          <span class="badge-posicao">Coração</span> 
          <span class="badge-posicao">Fundo</span> 
        </div> 
      </div> 
    </div> 
 
    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação --> 
    <div class="bloco"> 
      <h3>Descrição Técnica</h3> 
      <p>A nota de vinho apresenta um perfil frutado, encorpado e levemente alcoólico, podendo trazer nuances de uvas maduras, frutas escuras, madeira, especiarias e facetas vínicas.</p> 
 
      <h3>Descrição Prática</h3> 
      <p>Na perfumaria, o acorde de vinho é utilizado para acrescentar profundidade, sofisticação e um caráter frutado mais adulto. Combina especialmente bem com uva, frutas vermelhas, rosas, madeiras, âmbar e especiarias.</p> 
 
      <h3>Sensação Transmitida</h3> 
      <p class="sensacao">Sofisticação, sensualidade, mistério, calor e uma atmosfera elegante e envolvente.</p> 
    </div> 
 
    <!-- DIREITA: Ocasiões e Combinações --> 
    <div class="bloco"> 
 
      <h3>Exemplos de Ocasiões</h3> 
      <p style="font-size: 0.9em; color: #aaa; margin-bottom: 15px;"> 
        Momentos e situações perfeitas para fragrâncias que destacam a nota de <?php echo $nota_nome; ?>: 
      </p> 
 
      <ul class="lista-ocasiao"> 
        <li> 
          <span class="icone">🌙</span> 
          <div> 
            <strong>Noite</strong><br> 
            <small style="color:#aaa;">Ideal para fragrâncias marcantes e sofisticadas em ambientes noturnos.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">💕</span> 
          <div> 
            <strong>Encontros</strong><br> 
            <small style="color:#aaa;">Cria uma atmosfera sensual, elegante e envolvente.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🎩</span> 
          <div> 
            <strong>Ocasiões Especiais</strong><br> 
            <small style="color:#aaa;">Perfeito para eventos que pedem personalidade e sofisticação.</small> 
          </div> 
        </li> 
      </ul> 
 
      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3> 
      <p style="font-size: 0.9em;"> 
        Harmoniza perfeitamente com: <strong>Uva, rosa, frutas vermelhas, ameixa, âmbar, madeiras e especiarias.</strong> 
      </p> 
 
    </div> 
 
  </div> 
 
</div> 
 
<script src="/perfumatch/includes/script.js"></script> 
 
</body> 
</html>