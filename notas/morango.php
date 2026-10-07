<?php 
require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Morango";
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
      background-color: #e74c3c; /* Vermelho/Frutado */
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
      color: #ffb8c6;
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
      <img class="img-nota-principal" src="/perfumatch/uploads/notas/morango.png" alt="<?php echo $nota_nome; ?>">

      <span class="tag-familia">Frutado / Doce</span>

      <div class="info">
        <p><strong>Origem:</strong> Sintética / Acordo de Laboratório (Furaneol / Etil Maltol)</p>
        <p><strong>Classificação:</strong> Nota de Saída (Topo) e Coração</p>
        <p><strong>Volatilidade:</strong> Média-Alta (Difusão inicial marcante)</p>

        <p><strong>Posições Comuns na Pirâmide:</strong></p>
        <div style="display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px;">
          <span class="badge-posicao">Topo (Muito Comum)</span>
          <span class="badge-posicao">Coração (Frequente)</span>
        </div>
      </div>
    </div>

    <!-- CENTRO: Descrições Técnicas, Práticas e Sensação -->
    <div class="bloco">
      <h3>Descrição Técnica</h3>
      <p>
        O aroma do morango não pode ser extraído diretamente da fruta de forma natural por destilação. Portanto, é recriado na perfumaria através de acordes sintéticos com moléculas como o *Furaneol* e o *Ethyl Maltol*. Ele confere facetas suculentas, levemente ácidas, lactônicas e bem adocicadas.
      </p>

      <h3>Descrição Prática</h3>
      <p>
        Na pele, se manifesta com uma abertura efervescente e alegre. Varia desde o morango fresco e natural até facetas de calda de morango, chantilly ou licor frutado, trazendo jovialidade, brilho e uma doçura apetitosa à fragrância.
      </p>

      <h3>Sensação Transmitida</h3>
      <p class="sensacao">
        Transmite uma sensação vibrante, brincalhona e romântica. Desperta memórias de sobremesas e dias ensolarados, proporcionando um toque sedutor, jovial e acolhedor.
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
            <strong>Passeios Diurnos & Primavera</strong><br>
            <small style="color:#aaa;">Encontros ao ar livre, parques e dias de sol moderado.</small>
          </div>
        </li>
        <li>
          <span class="icone">💕</span>
          <div>
            <strong>Encontros Românticos</strong><br>
            <small style="color:#aaa;">Ideal para criar um clima envolvente, doce e descontraído.</small>
          </div>
        </li>
        <li>
          <span class="icone">🎉</span>
          <div>
            <strong>Festas e Eventos Casuais</strong><br>
            <small style="color:#aaa;">Proporciona destaque marcante e jovial para momentos sociais.</small>
          </div>
        </li>
      </ul>

      <h3 style="margin-top: 25px;">Combinações Perfeitas</h3>
      <p style="font-size: 0.9em;">
        Harmoniza perfeitamente com: <strong>Baunilha, Chantilly, Jasmim, Champanhe, Framboesa e Almíscar.</strong>
      </p>

    </div>

  </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>
</html>