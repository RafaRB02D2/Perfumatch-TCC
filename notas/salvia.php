<?php  
require_once("../includes/conexao.php"); 
require_once("../includes/header.php"); 
 
// DADOS DA NOTA 
$nota_nome = "Sálvia"; 
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/salvia.png" alt="<?php echo $nota_nome; ?>"> 
 
      <span class="tag-familia">Aromática / Verde / Herbal</span> 
 
      <div class="info"> 
        <p><strong>Origem:</strong> Natural, proveniente principalmente das folhas da Salvia officinalis, planta aromática conhecida por seu aroma verde, herbal e levemente canforado.</p> 
        <p><strong>Classificação:</strong> Nota de Saída e Coração</p> 
        <p><strong>Volatilidade:</strong> Média a Alta (apresenta um aroma fresco, herbal, verde e aromático, bastante perceptível na abertura).</p> 
 
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
        A Sálvia apresenta um aroma verde, herbal, aromático e levemente canforado. Possui nuances frescas, secas e ligeiramente terrosas, proporcionando um caráter natural e revigorante à composição. 
      </p> 
 
      <h3>Descrição Prática</h3> 
      <p> 
        Na perfumaria, a Sálvia é utilizada para adicionar frescor, limpeza e personalidade aromática. Combina muito bem com lavanda, alecrim, cítricos, madeiras, almíscar e notas aquáticas, sendo bastante utilizada em fragrâncias masculinas, esportivas e aromáticas. 
      </p> 
 
      <h3>Sensação Transmitida</h3> 
      <p class="sensacao"> 
        Transmite uma sensação de limpeza, frescor, energia e naturalidade. Evoca ervas aromáticas recém-amassadas e uma paisagem verde, criando uma atmosfera revigorante, fresca e sofisticada. 
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
          <span class="icone">☀️</span> 
          <div> 
            <strong>Primavera, Verão e Dias Quentes</strong><br> 
            <small style="color:#aaa;">Seu perfil verde, herbal e fresco combina especialmente bem com temperaturas elevadas.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🏃</span> 
          <div> 
            <strong>Academia e Atividades ao Ar Livre</strong><br> 
            <small style="color:#aaa;">Seu caráter revigorante e limpo transmite uma sensação de energia e frescor.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">💼</span> 
          <div> 
            <strong>Trabalho e Dia a Dia</strong><br> 
            <small style="color:#aaa;">É uma nota versátil e elegante para ambientes profissionais e situações cotidianas.</small> 
          </div> 
        </li> 
      </ul> 
 
      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3> 
      <p style="font-size: 0.9em;"> 
        Harmoniza perfeitamente com: <strong>Lavanda, Alecrim, Bergamota, Limão, Hortelã, Cedro, Vetiver, Almíscar e Sândalo.</strong> 
      </p> 
 
    </div> 
 
  </div> 
 
</div> 
 
<script src="/perfumatch/includes/script.js"></script> 
 
</body> 
</html>