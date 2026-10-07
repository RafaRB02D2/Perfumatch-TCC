<?php  
require_once("../includes/conexao.php"); 
require_once("../includes/header.php"); 
 
// DADOS DA NOTA 
$nota_nome = "Pimenta Preta"; 
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
      background-color: #333333; 
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/pimentapreta.png" alt="<?php echo $nota_nome; ?>"> 
 
      <span class="tag-familia">Especiada / Quente / Amadeirada</span> 
 
      <div class="info"> 
        <p><strong>Origem:</strong> Natural, proveniente dos frutos secos da pimenteira-do-reino (<i>Piper nigrum</i>), utilizada em perfumaria principalmente por seu caráter picante, seco e aromático.</p> 
        <p><strong>Classificação:</strong> Nota de Saída e Coração</p> 
        <p><strong>Volatilidade:</strong> Alta a Média (apresenta uma abertura vibrante e picante, evoluindo para um aspecto seco, quente e levemente amadeirado).</p> 
 
        <p><strong>Posições Comuns na Pirâmide:</strong></p> 
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;"> 
          <span class="badge-posicao">Saída (Muito Comum)</span> 
          <span class="badge-posicao">Coração (Comum)</span> 
        </div> 
      </div> 
    </div> 
 
    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação --> 
    <div class="bloco"> 
      <h3>Descrição Técnica</h3> 
      <p> 
        A Pimenta Preta possui um aroma seco, picante, quente e levemente amadeirado. Apresenta nuances aromáticas e terrosas, trazendo uma sensação vibrante e ligeiramente pungente à composição. 
      </p> 
 
      <h3>Descrição Prática</h3> 
      <p> 
        Na perfumaria, a Pimenta Preta é utilizada para adicionar intensidade, calor e personalidade. Funciona muito bem em perfumes especiados, amadeirados e orientais, criando contraste e dando mais energia à composição. 
      </p> 
 
      <h3>Sensação Transmitida</h3> 
      <p class="sensacao"> 
        Transmite uma sensação de força, calor, energia e sofisticação. Evoca pimenta preta recém-moída e especiarias secas, criando uma atmosfera marcante, masculina e envolvente. 
      </p> 
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
            <strong>Noites e Dias Frios</strong><br> 
            <small style="color:#aaa;">Seu perfil quente e especiado se destaca especialmente em temperaturas mais baixas.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">❤️</span> 
          <div> 
            <strong>Encontros Românticos</strong><br> 
            <small style="color:#aaa;">Sua faceta picante adiciona sensualidade e presença à fragrância.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🎩</span> 
          <div> 
            <strong>Eventos e Ocasiões Especiais</strong><br> 
            <small style="color:#aaa;">A personalidade marcante da nota combina com perfumes sofisticados e de maior presença.</small> 
          </div> 
        </li> 
      </ul> 
 
      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3> 
      <p style="font-size: 0.9em;"> 
        Harmoniza perfeitamente com: <strong>Bergamota, Cardamomo, Canela, Cravo, Rosa, Jasmim, Cedro, Sândalo e Âmbar.</strong> 
      </p> 
 
    </div> 
 
  </div> 
 
</div> 
 
<script src="/perfumatch/includes/script.js"></script> 
 
</body> 
</html>
