<?php 
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Melancia";
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
      background-color: #27ae60; /* Frutada / Aquática / Ozônica */
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
      color: #d4efdf;
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/melancia.png" alt="<?php echo $nota_nome; ?>">

      <span class="tag-familia">Frutada / Aquática</span>

      <div class="info">
        <p><strong>Origem:</strong> Reconstrução Sintética (Formulada com moléculas ozônicas e aquosas como *Calone* e *Melonal*)</p>
        <p><strong>Classificação:</strong> Nota de Saída (Topo)</p>
        <p><strong>Volatilidade:</strong> Alta (Projeção efervescente, aquosa, ultra-refrescante e leve)</p>

        <p><strong>Posições Comuns na Pirâmide:</strong></p>
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">
          <span class="badge-posicao">Topo (Extremamente Comum)</span>
          <span class="badge-posicao">Coração (Ocasional)</span>
        </div>
      </div>
    </div>

    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação -->
    <div class="bloco">
      <h3>Descrição Técnica</h3>
      <p>
        A nota de melancia é criada sinteticamente por meio de aldeídos ozônicos e ingredientes como o *Melonal*. Apresenta um aroma frutivo aquoso, verde-suculento, levemente adocicado e com nuances de pepino fresco e brisa marinha.
      </p>

      <h3>Descrição Prática</h3>
      <p>
        Na pele, descarrega um alívio imediato de frescor gelado e transparência. É um pilar em fragrâncias de verão, florais aquáticos e composições marinhas, conferindo vivacidade, sensação de limpeza fluida e um toque jovial irresistível.
      </p>

      <h3>Sensação Transmitida</h3>
      <p class="sensacao">
        Transmite uma sensação de frescor revigorante, hidratação gelada, jovialidade alegre e descomplicação. Evoca fatias de frutas geladas em dias quentes, mergulhos em águas cristalinas e tardes de sol.
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
            <strong>Dias Escaldantes de Verão</strong><br>
            <small style="color:#aaa;">Imbatível para proporcionar sensação de frescor, limpeza e alívio térmico.</small>
          </div>
        </li>
        <li>
          <span class="icone">🏖️</span>
          <div>
            <strong>Praia, Piscina e Férias</strong><br>
            <small style="color:#aaa;">Perfeita para momentos de lazer descontraídos ao ar livre.</small>
          </div>
        </li>
        <li>
          <span class="icone">🏃</span>
          <div>
            <strong>Pós-Treino e Uso Esportivo</strong><br>
            <small style="color:#aaa;">Excelente para prolongar o frescor do banho e renovar as energias.</small>
          </div>
        </li>
      </ul>

      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3>
      <p style="font-size: 0.9em;">
        Harmoniza perfeitamente com: <strong>Pepino, Maçã Verde, Limão Taiti, Hortelã, Lótus, Almíscar Branco e Peônia.</strong>
      </p>

    </div>

  </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>