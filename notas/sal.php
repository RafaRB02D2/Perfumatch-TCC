<?php  
require_once("../includes/conexao.php"); 
require_once("../includes/header.php"); 
 
// DADOS DA NOTA 
$nota_nome = "Sal"; 
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/sal.png" alt="<?php echo $nota_nome; ?>"> 
 
      <span class="tag-familia">Mineral / Fresca / Salgada</span> 
 
      <div class="info"> 
        <p><strong>Origem:</strong> Acorde olfativo inspirado no cheiro do sal marinho, da água salgada e do ar marítimo, reproduzido na perfumaria através de moléculas aromáticas e acordes marinhos.</p> 
        <p><strong>Classificação:</strong> Nota de Saída e Coração</p> 
        <p><strong>Volatilidade:</strong> Média a Alta (contribui para uma abertura fresca, limpa, mineral e levemente aquática).</p> 
 
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
        O Sal apresenta um efeito mineral, fresco, aquático e levemente salgado. Na perfumaria, não corresponde necessariamente ao sal utilizado na culinária, mas a um acorde criado para reproduzir a sensação do ar marítimo, da água do mar e da pele aquecida pelo sol. 
      </p> 
 
      <h3>Descrição Prática</h3> 
      <p> 
        Na perfumaria, o Sal é utilizado para acrescentar naturalidade, frescor e uma faceta marítima à composição. Combina muito bem com notas aquáticas, cítricas, aromáticas, madeiras, âmbar e acordes de praia, criando fragrâncias modernas e refrescantes. 
      </p> 
 
      <h3>Sensação Transmitida</h3> 
      <p class="sensacao"> 
        Transmite uma sensação de frescor, liberdade, limpeza e contato com o mar. Evoca a brisa marítima, a água salgada e a pele aquecida pelo sol, criando uma atmosfera relaxante e revigorante. 
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
            <strong>Verão e Dias Quentes</strong><br> 
            <small style="color:#aaa;">Seu perfil fresco, mineral e marítimo combina especialmente bem com temperaturas elevadas.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🏖️</span> 
          <div> 
            <strong>Praia e Momentos de Lazer</strong><br> 
            <small style="color:#aaa;">Sua faceta salgada e aquática transmite imediatamente uma sensação de mar e liberdade.</small> 
          </div> 
        </li> 
        <li> 
          <span class="icone">🏃</span> 
          <div> 
            <strong>Academia e Dia a Dia</strong><br> 
            <small style="color:#aaa;">Seu caráter fresco e limpo funciona muito bem em ambientes informais e atividades durante o dia.</small> 
          </div> 
        </li> 
      </ul> 
 
      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3> 
      <p style="font-size: 0.9em;"> 
        Harmoniza perfeitamente com: <strong>Notas Marinhas, Água de Coco, Bergamota, Limão, Lavanda, Algas Marinhas, Âmbar, Sândalo e Almíscar.</strong> 
      </p> 
 
    </div> 
 
  </div> 
 
</div> 
 
<script src="/perfumatch/includes/script.js"></script> 
 
</body> 
</html>