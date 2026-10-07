<?php

require_once("../includes/conexao.php");
require_once("../includes/header.php");

// DADOS DA NOTA
$nota_nome = "Pepino";
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
            background-color: #4b7f45;
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

    <h2 class="titulo-centro">
        Nota Olfativa: <?php echo $nota_nome; ?>
    </h2>

    <div class="nota-detalhe">

        <!-- ESQUERDA: IMAGEM, FAMÍLIA E CLASSIFICAÇÃO -->

        <div class="bloco">

            <img
                class="img-nota-principal"
                src="/perfumatch/uploads/notas/pepino.png"
                alt="<?php echo $nota_nome; ?>"
            >

            <span class="tag-familia">
                Verde / Fresca / Aquática
            </span>

            <div class="info">

                <p>
                    <strong>Origem:</strong>
                    Natural, relacionada ao pepino
                    (<i>Cucumis sativus</i>). Na perfumaria, seu perfil
                    aromático é geralmente reproduzido através de acordes
                    e matérias-primas aromáticas sintéticas.
                </p>

                <p>
                    <strong>Classificação:</strong>
                    Nota de Saída / Coração
                </p>

                <p>
                    <strong>Volatilidade:</strong>
                    Alta a Média. Suas características verdes, aquosas
                    e refrescantes aparecem rapidamente na abertura,
                    podendo permanecer durante parte da evolução da fragrância.
                </p>

                <p>
                    <strong>Posições Comuns na Pirâmide:</strong>
                </p>

                <div style="display:flex; gap:5px; flex-wrap:wrap; margin-top:5px;">

                    <span class="badge-posicao">
                        Saída (Muito Comum)
                    </span>

                    <span class="badge-posicao">
                        Coração (Comum)
                    </span>

                </div>

            </div>

        </div>


        <!-- CENTRO: DESCRIÇÕES -->

        <div class="bloco">

            <h3>Descrição Técnica</h3>

            <p>
                O Pepino apresenta um aroma verde, aquoso, fresco e
                levemente vegetal. Sua característica lembra o pepino
                recém-cortado, trazendo uma impressão limpa, úmida e
                refrescante. Pode apresentar nuances verdes e discretamente
                aromáticas.
            </p>

            <h3>Descrição Prática</h3>

            <p>
                Na perfumaria, o Pepino é utilizado para acrescentar
                frescor e uma sensação aquática às fragrâncias. É
                especialmente interessante em perfumes frescos,
                aquáticos, verdes e esportivos, ajudando a criar uma
                abertura limpa e refrescante. Também pode complementar
                acordes cítricos, frutados e florais.
            </p>

            <h3>Sensação Transmitida</h3>

            <p class="sensacao">
                Transmite uma sensação de frescor, limpeza, leveza e
                hidratação. Evoca a imagem de água gelada, vegetação
                fresca e um ambiente limpo em um dia quente, proporcionando
                uma impressão revigorante e confortável.
            </p>

        </div>


        <!-- DIREITA: OCASIÕES E COMBINAÇÕES -->

        <div class="bloco">

            <h3>Exemplos de Ocasiões</h3>

            <p style="font-size:0.9em; color:#aaa; margin-bottom:15px;">

                Momentos e situações perfeitas para fragrâncias que
                destacam a nota de <?php echo $nota_nome; ?>:

            </p>

            <ul class="lista-ocasiao">

                <li>

                    <span class="icone">☀️</span>

                    <div>

                        <strong>Dias Quentes e Verão</strong><br>

                        <small style="color:#aaa;">
                            Seu perfil aquoso e refrescante combina
                            especialmente bem com temperaturas elevadas.
                        </small>

                    </div>

                </li>


                <li>

                    <span class="icone">🏋️</span>

                    <div>

                        <strong>Academia e Atividades Esportivas</strong><br>

                        <small style="color:#aaa;">
                            A sensação limpa e refrescante combina
                            muito bem com ambientes esportivos.
                        </small>

                    </div>

                </li>


                <li>

                    <span class="icone">🌊</span>

                    <div>

                        <strong>Praia, Piscina e Ambientes ao Ar Livre</strong><br>

                        <small style="color:#aaa;">
                            Sua faceta aquática cria uma sensação de
                            frescor ideal para ambientes próximos à água.
                        </small>

                    </div>

                </li>


                <li>

                    <span class="icone">💼</span>

                    <div>

                        <strong>Trabalho e Dia a Dia</strong><br>

                        <small style="color:#aaa;">
                            É uma nota leve e limpa, adequada para
                            ambientes profissionais e situações cotidianas.
                        </small>

                    </div>

                </li>

            </ul>


            <h3 style="margin-top:25px;">
                Combinações Perfeitas
            </h3>

            <p style="font-size:0.9em;">

                Harmoniza perfeitamente com:

                <strong>
                    Bergamota, Limão, Hortelã, Melão, Melancia,
                    Notas Aquáticas, Almíscar, Chá Verde e Madeiras Claras.
                </strong>

            </p>

        </div>

    </div>

</div>

<script src="/perfumatch/includes/script.js"></script>

</body>

</html>

