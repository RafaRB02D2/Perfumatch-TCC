<?php 
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Mamão";
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
      background-color: #e67e22; /* Frutada / Tropical / Suculenta */
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
      color: #f8c471;
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/mamao.png" alt="<?php echo $nota_nome; ?>">

      <span class="tag-familia">Frutada / Tropical / Suculenta</span>

      <div class="info">
        <p><strong>Origem:</strong> Reconstrução Sintética (Acorde frutado-tropical formulado com ésteres e lactonas)</p>
        <p><strong>Classificação:</strong> Nota de Saída (Topo) e Coração</p>
        <p><strong>Volatilidade:</strong> Alta a Média (Aroma exótico, suculento, aveludado e radiante)</p>

        <p><strong>Posições Comuns na Pirâmide:</strong></p>
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">
          <span class="badge-posicao">Topo (Muito Comum)</span>
          <span class="badge-posicao">Coração (Comum)</span>
        </div>
      </div>
    </div>

    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação -->
    <div class="bloco">
      <h3>Descrição Técnica</h3>
      <p>
        Sendo impossível a extração direta do óleo da polpa, a nota de mamão é recriada sinteticamente. Oferece um perfil frutado exótico, denso, macio e levemente almiscarado, com nuances que lembram o mirtilo, a manga e o néctar tropical maduro.
      </p>

      <h3>Descrição Prática</h3>
      <p>
        Na pele, traz uma textura frutada envolvente, aveludada e cremosa. É frequentemente utilizada em fragrâncias de verão, florais tropicais e criações solares para transmitir uma doçura natural e aquosa sem pesar no dulçor industrial.
      </p>

      <h3>Sensação Transmitida</h3>
      <p class="sensacao">
        Transmite uma sensação de energia tropical, calor solar, descontrações praianas e textura aveludada. Evoca café da manhã em resorts tropicais, frutas colhidas no pé e a brisa morna do verão.
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
            <strong>Dias Ensolarados e Férias de Verão</strong><br>
            <small style="color:#aaa;">Excelente para passeios ao ar livre, praia e ambientes descontraídos.</small>
          </div>
        </li>
        <li>
          <span class="icone">🍹</span>
          <div>
            <strong>Festas Tropicais e Almoços Diurnos</strong><br>
            <small style="color:#aaa;">Projeta uma aura vibrante, amigável, alegre e cheia de frescor.</small>
          </div>
        </li>
        <li>
          <span class="icone">🌺</span>
          <div>
            <strong>Passeios Informais no Fim de Tarde</strong><br>
            <small style="color:#aaa;">Combina perfeitamente com a transição do calor para noites amenas.</small>
          </div>
        </li>
      </ul>

      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3>
      <p style="font-size: 0.9em;">
        Harmoniza perfeitamente com: <strong>Coco, Manga, Maracujá, Flor de Frangipani, Hibisco, Baunilha e Bergamota.</strong>
      </p>

    </div>

  </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>