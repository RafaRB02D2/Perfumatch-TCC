<?php  
require_once("../includes/conexao.php"); 
require_once("../includes/header.php"); 
 
// DADOS DA NOTA 
$nota_nome = "Rum"; 
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/rum.png" alt="<?php echo $nota_nome; ?>"> 
 
      <span class="tag-familia">Amadeirada / Gourmand / Alcoólica</span> 
 
      <div class="info"> 
        <p><strong>Origem:</strong> Natural, associado à bebida destilada produzida a partir da cana-de-açúcar e reproduzido na perfumaria através de acordes doces, amadeirados e alcoólicos.</p> 
        <p><strong>Classificação:</strong> Nota de Coração e Fundo</p> 
        <p><strong>Volatilidade:</strong> Média (apresenta um aroma marcante, doce, quente e levemente alcoólico, podendo permanecer na evolução da fragrância).</p> 
 
        <p><strong>Posições Comuns na Pirâmide:</strong></p> 
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;"> 
          <span class="badge-posicao">Coração (Muito Comum)</span> 
          <span class="badge-posicao">Fundo (Comum)</span> 
        </div> 
      </div> 
    </div> 
 
    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação --> 
    <div class="bloco"> 
      <h3>Descrição Técnica</h3> 
      <p> 
        O Rum apresenta um aroma quente, doce, amadeirado e levemente alcoólico, podendo trazer nuances de melaço, caramelo, baunilha e especiarias. Seu perfil é encorpado, envolvente e marcante. 
      </p> 
 
      <h3>Descrição Prática</h3> 
      <p> 
        Na perfumaria, o Rum é utilizado para acrescentar profundidade, calor e sensualidade à composição. Combina muito bem com baunilha, caramelo, canela, madeiras, tabaco, âmbar e outras notas gourmand, sendo comum em fragrâncias intensas e sedutoras. 
      </p> 
 
      <h3>Sensação Transmitida</h3> 
      <p class="sensacao"> 
        Transmite uma sensação de calor, conforto, sofisticação e sensualidade. Evoca ambientes noturnos, bebidas envelhecidas e acordes doces e envolventes, criando uma atmosfera luxuosa e sedutora. 
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
            <strong>Noite, Outono e Inverno</strong><br> 
            <small style="color:#aaa;">Seu perfil quente, doce e encorpado combina especialmente bem com temperaturas baixas e ambientes noturnos.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">💕</span> 
          <div> 
            <strong>Encontros Românticos</strong><br> 
            <small style="color:#aaa;">Sua faceta quente e adocicada cria uma presença envolvente, sensual e marcante.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🎉</span> 
          <div> 
            <strong>Festas e Ocasiões Especiais</strong><br> 
            <small style="color:#aaa;">Seu perfil sofisticado e intenso combina com momentos em que se deseja maior presença e destaque.</small> 
          </div> 
        </li> 
      </ul> 
 
      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3> 
      <p style="font-size: 0.9em;"> 
        Harmoniza perfeitamente com: <strong>Baunilha, Caramelo, Canela, Tabaco, Âmbar, Fava Tonka, Sândalo, Cedro e Cacau.</strong> 
      </p> 
 
    </div> 
 
  </div> 
 
</div> 
 
<script src="/perfumatch/includes/script.js"></script> 
 
</body> 
</html>