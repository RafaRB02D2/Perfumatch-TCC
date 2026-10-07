<?php 
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Magnólia";
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
      background-color: #d4ac0d; /* Floral / Cítrica / Cremosa */
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
      color: #f9e79f;
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/magnolia.png" alt="<?php echo $nota_nome; ?>">

      <span class="tag-familia">Floral / Cítrica / Cremosa</span>

      <div class="info">
        <p><strong>Origem:</strong> Natural (Destilação a vapor das flores de Magnolia grandiflora / alba) ou Acordo Sintético</p>
        <p><strong>Classificação:</strong> Nota de Saída (Topo) e Coração</p>
        <p><strong>Volatilidade:</strong> Média-Alta (Luminosidade floral radiante, fresca e marcante)</p>

        <p><strong>Posições Comuns na Pirâmide:</strong></p>
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">
          <span class="badge-posicao">Topo (Muito Comum)</span>
          <span class="badge-posicao">Coração (Extremamente Comum)</span>
        </div>
      </div>
    </div>

    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação -->
    <div class="bloco">
      <h3>Descrição Técnica</h3>
      <p>
        Rica em *Linalool* e *Limoneno*, a nota de magnólia equilibra um floral opulento e aveludado com uma marcante efervescência cítrica que remete ao limão refinado. Apresenta nuances sutis de champanhe, maçã verde e um fundo levemente vanílico.
      </p>

      <h3>Descrição Prática</h3>
      <p>
        Na pele, traz uma explosão de luz e elegância solar. É ideal para dar vivacidade e abertura efervescente a buquês florais nobres, evitando que se tornem pesados ou indólicos, conferindo um toque contemporâneo e cristalino.
      </p>

      <h3>Sensação Transmitida</h3>
      <p class="sensacao">
        Transmite uma sensação de otimismo radiante, elegância solar, leveza sofisticada e frescor cristalino. Evoca jardins floridos sob a luz da manhã, taças de champanhe e tecidos leves ao vento.
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
            <strong>Dias Ensolarados de Primavera e Verão</strong><br>
            <small style="color:#aaa;">Sua luminosidade cítrica e floral brilha intensamente sob a luz do dia.</small>
          </div>
        </li>
        <li>
          <span class="icone">🥂</span>
          <div>
            <strong>Eventos Sociais e Almoços Elegantes</strong><br>
            <small style="color:#aaa;">Garante um rastro festivo, refinado, encantador e alegre.</small>
          </div>
        </li>
        <li>
          <span class="icone">🌸</span>
          <div>
            <strong>Passeios ao Ar Livre e Casamentos Diurnos</strong><br>
            <small style="color:#aaa;">Harmoniza com a natureza e comemorações românticas.</small>
          </div>
        </li>
      </ul>

      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3>
      <p style="font-size: 0.9em;">
        Harmoniza perfeitamente com: <strong>Bergamota, Jasmin, Rosa, Peônia, Cedro, Almíscar Branco e Pera.</strong>
      </p>

    </div>

  </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>