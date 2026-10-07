<?php 
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Limão";
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
    /* CSS para a estrutura em 3 blocos da página de nota */
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
      background-color: #27ae60; /* Cítrico / Vívido */
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
      color: #f1f2f6;
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/limao.png" alt="<?php echo $nota_nome; ?>">

      <span class="tag-familia">Cítrico / Refrescante</span>

      <div class="info">
        <p><strong>Origem:</strong> Natural (Prensagem a frio da casca do Citrus limon)</p>
        <p><strong>Classificação:</strong> Nota de Saída (Topo)</p>
        <p><strong>Volatilidade:</strong> Alta (Evaporação rápida e efervescente)</p>

        <p><strong>Posições Comuns na Pirâmide:</strong></p>
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">
          <span class="badge-posicao">Topo (Extremamente Comum)</span>
        </div>
      </div>
    </div>

    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação -->
    <div class="bloco">
      <h3>Descrição Técnica</h3>
      <p>
        Uma das notas mais fundamentais da perfumaria clássica e moderna, predominantemente composta por *Limoneno* e *Citral*. Possui perfil volátil e efervescente, proporcionando uma explosão inicial ácida, cortante e efervescente que ajuda a abrir a pirâmide olfativa do perfume.
      </p>

      <h3>Descrição Prática</h3>
      <p>
        Na pele, o limão se manifesta como uma borrifada de energia imediata. Traz um aspecto limpo, azedinho e muito luminoso, perfeito para quebrar o peso de notas muito doces ou intensificar o frescor de acordes aquáticos e herbáceos.
      </p>

      <h3>Sensação Transmitida</h3>
      <p class="sensacao">
        Transmite uma sensação revigorante de limpeza, energia vital, dinamismo e leveza. Desperta o corpo, traz clareza mental e evoca a refrescância de um dia ensolarado.
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
            <strong>Dias Quentes e Verão Intense</strong><br>
            <small style="color:#aaa;">Ideal para combater o calor e manter a sensação de frescor no auge.</small>
          </div>
        </li>
        <li>
          <span class="icone">🏃</span>
          <div>
            <strong>Atividades Físicas & Esportes</strong><br>
            <small style="color:#aaa;">Proporciona energia e aroma levemente estimulante durante o treino.</small>
          </div>
        </li>
        <li>
          <span class="icone">🌿</span>
          <div>
            <strong>Uso Diário e Passeios Casuais</strong><br>
            <small style="color:#aaa;">Perfeito para compromissos informais e manhãs ensolaradas.</small>
          </div>
        </li>
      </ul>

      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3>
      <p style="font-size: 0.9em;">
        Harmoniza perfeitamente com: <strong>Bergamota, Lavanda, Alecrim, Cedro, Hortelã e Vetiver.</strong>
      </p>

    </div>

  </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>