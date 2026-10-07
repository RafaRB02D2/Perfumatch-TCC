```php
<?php

require_once("../includes/conexao.php");
require_once("../includes/header.php");

// PERFUME
$perfume_nome = "Fakhar Rose";

// LOGIN
$logado = isset($_SESSION['usuario_id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Fakhar Rose</title>

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
        Fakhar Rose
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
                src="/perfumatch/uploads/fakhar_rose.jfif"
            >


            <div class="info">

                <p>
                    <strong>Gênero:</strong>
                    Feminino
                </p>

                <p>
                    <strong>Ocasião:</strong>
                    Dia • Trabalho • Uso casual • Encontros
                </p>

                <p>
                    <strong>Fixação:</strong>
                    6–8h
                </p>

                <p>
                    <strong>Projeção:</strong>
                    2–3h média
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
                        src="/perfumatch/uploads/notas/frutas.png"
                    >

                    <span>
                        Frutas
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/laranja.png"
                    >

                    <span>
                        Tangerina
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/pimentarosa.png"
                    >

                    <span>
                        Pimenta Rosa
                    </span>

                </div>


            </div>


            <h4>
                Coração
            </h4>


            <div class="notas">


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/jasmim.png"
                    >

                    <span>
                        Jasmim
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/rosa.png"
                    >

                    <span>
                        Rosa
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/iris.png"
                    >

                    <span>
                        Íris
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
                        src="/perfumatch/uploads/notas/ambar.png"
                    >

                    <span>
                        Âmbar
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/patchouli.png"
                    >

                    <span>
                        Patchouli
                    </span>

                </div>


                <div class="nota">

                    <img
                        src="/perfumatch/uploads/notas/sandalo.png"
                    >

                    <span>
                        Sândalo
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
                R$ 130 – R$ 200
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

                Floral, feminino, elegante e levemente adocicado.
                O Fakhar Rose apresenta uma abertura frutada e
                levemente picante, seguida por um coração floral
                marcado por jasmim, rosa, íris e narciso.
                Na base, a baunilha, o âmbar, o patchouli e o
                sândalo deixam a fragrância cremosa, confortável
                e sofisticada.

            </p>


            <h3>
                Inspirados
            </h3>


            <ul class="inspirados">

                <li>
                    Inspirado em fragrâncias florais femininas
                    modernas, com destaque para o perfil de
                    L'Interdit de Givenchy.
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
