<?php

require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Eclaire";

// LOGIN
$logado = isset($_SESSION['usuario_id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Eclaire</title>

<link
    rel="stylesheet"
    href="/perfumatch/includes/style.css"
>

<link
    rel="stylesheet"
    href="/perfumatch/perfumes/perfumes.css"
>


<style>

.estrelas-input {

    display:flex;

    flex-direction:row-reverse;

    justify-content:center;

}


.estrelas-input input {

    display:none;

}


.estrelas-input label {

    font-size:30px;

    color:#444;

    cursor:pointer;

    transition:0.2s;

}


.estrelas-input input:checked ~ label,
.estrelas-input label:hover,
.estrelas-input label:hover ~ label {

    color:gold;

}

</style>

</head>


<body>


<div class="conteudo-principal">


    <h2 class="titulo-centro">
        Eclaire
    </h2>


    <div class="perfume-detalhe">


        <!-- ESQUERDA -->

        <div class="bloco">


            <img
                class="logo-marca"
                src="/perfumatch/uploads/marcas/lattafa.png"
            >


            <img
                class="img-perfume"
                src="/perfumatch/uploads/eclaire.jfif"
            >


            <div class="info">

                <p>
                    <strong>Gênero:</strong>
                    Feminino
                </p>

                <p>
                    <strong>Ocasião:</strong>
                    Dia • Noite • Uso casual • Encontros • Festas
                </p>

                <p>
                    <strong>Fixação:</strong>
                    8–10h
                </p>

                <p>
                    <strong>Projeção:</strong>
                    2–4h média/alta
                </p>

                <p>
                    <strong>Tipo de pele:</strong>
                    Todas
                </p>

            </div>

        </div>


        <!-- CENTRO -->

        <div class="bloco">


            <h3>
                Pirâmide Olfativa
            </h3>


            <h4>
                Topo
            </h4>


            <div class="notas">


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/caramelo.png"
                    >

                    <span>
                        Caramelo
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/leite.png"
                    >

                    <span>
                        Leite
                    </span>

                </div>


            </div>


            <h4>
                Coração
            </h4>


            <div class="notas">


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/mel.png"
                    >

                    <span>
                        Mel
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/flordelaranjeira.png"
                    >

                    <span>
                        Flor de Laranjeira
                    </span>

                </div>


            </div>


            <h4>
                Base
            </h4>


            <div class="notas">


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/baunilha.png"
                    >

                    <span>
                        Baunilha
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/almiscar.png"
                    >

                    <span>
                        Almíscar
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/benjoim.png"
                    >

                    <span>
                        Benjoim
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/musgodecarvalho.png"
                    >

                    <span>
                        Musgo
                    </span>

                </div>


            </div>


        </div>


        <!-- DIREITA -->

        <div class="bloco">


            <h3>
                Preço
            </h3>


            <div class="preco">
                R$ 150 – R$ 220
            </div>


            <h3>
                Avaliação
            </h3>


            <?php if($logado){ ?>


            <form
                method="POST"
                action="/perfumatch/includes/votar.php"
            >


                <input
                    type="hidden"
                    name="perfume"
                    value="<?php echo $perfume_nome; ?>"
                >


                <div class="estrelas-input">


                    <input
                        type="radio"
                        name="nota"
                        value="5"
                        id="e5"
                    >

                    <label for="e5">
                        ★
                    </label>


                    <input
                        type="radio"
                        name="nota"
                        value="4"
                        id="e4"
                    >

                    <label for="e4">
                        ★
                    </label>


                    <input
                        type="radio"
                        name="nota"
                        value="3"
                        id="e3"
                    >

                    <label for="e3">
                        ★
                    </label>


                    <input
                        type="radio"
                        name="nota"
                        value="2"
                        id="e2"
                    >

                    <label for="e2">
                        ★
                    </label>


                    <input
                        type="radio"
                        name="nota"
                        value="1"
                        id="e1"
                    >

                    <label for="e1">
                        ★
                    </label>


                </div>


                <button
                    type="submit"
                    style="margin-top:10px;"
                >
                    Avaliar
                </button>


            </form>


            <?php } else { ?>


                <p style="color:orange;">
                    Faça login para avaliar
                </p>


            <?php } ?>


            <?php include("../includes/votacao.php"); ?>


            <h3>
                Favoritar
            </h3>


            <?php if($logado){ ?>


                <form
                    method="POST"
                    action="/perfumatch/favorizar.php"
                >


                    <input
                        type="hidden"
                        name="perfume"
                        value="<?php echo $perfume_nome; ?>"
                    >


                    <button type="submit">
                        ❤️ Favoritar
                    </button>


                </form>


            <?php } else { ?>


                <p style="color:orange;">
                    Faça login para favoritar
                </p>


            <?php } ?>


            <h3>
                Sensação
            </h3>


            <p class="sensacao">

                Gourmand, cremoso, doce e extremamente
                aconchegante. O Eclaire apresenta um
                perfil gourmand marcado pelo caramelo,
                leite e mel, criando uma sensação
                açucarada e cremosa. Na base, a baunilha,
                o almíscar, o benjoim e o musgo deixam
                a fragrância quente, macia e envolvente.

            </p>


            <h3>
                Inspirados
            </h3>


            <ul class="inspirados">

                <li>
                    Inspirado no perfil de
                    Bianco Latte, de Giardini di Toscana.
                </li>

            </ul>


        </div>


    </div>

</div>


<script
    src="/perfumatch/includes/script.js"
></script>


</body>

</html>
