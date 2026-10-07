<?php

require_once(__DIR__ . "/includes/conexao.php");

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

require_once(__DIR__ . "/includes/header.php");

$logado = isset($_SESSION['usuario_id']);
$id_usuario = $logado ? (int)$_SESSION['usuario_id'] : 0;

$msg = "";
$erro = "";


/* =========================================================
   SALVAR AVALIAÇÃO
========================================================= */

if(isset($_POST['salvar_formulario'])){

    if(!$logado){

        $erro = "Você precisa estar logado para salvar.";

    }else{

        $familia = mysqli_real_escape_string(
            $conexao,
            $_POST['familia_salvar'] ?? ''
        );

        $genero = mysqli_real_escape_string(
            $conexao,
            $_POST['genero_salvar'] ?? ''
        );

        $ocasiao = mysqli_real_escape_string(
            $conexao,
            $_POST['ocasiao_salvar'] ?? ''
        );

        $intensidade = mysqli_real_escape_string(
            $conexao,
            $_POST['intensidade_salvar'] ?? ''
        );

        $perfumes_ids = mysqli_real_escape_string(
            $conexao,
            $_POST['perfumes_ids'] ?? ''
        );

        $nome = trim(
            $_POST['nome_preferencia'] ?? ''
        );


        /* =================================================
           NOME AUTOMÁTICO DA AVALIAÇÃO
        ================================================= */

        if($nome == ""){

            $res = mysqli_query(
                $conexao,
                "SELECT COUNT(*) AS total
                 FROM formularios_salvos
                 WHERE id_usuario = $id_usuario"
            );

            if($res){

                $dados = mysqli_fetch_assoc($res);

                $nome = "Avaliação " .
                        ((int)$dados['total'] + 1);

            }else{

                $nome = "Avaliação 1";

            }
        }


        $nome = mysqli_real_escape_string(
            $conexao,
            $nome
        );


        /* =================================================
           INSERIR AVALIAÇÃO
        ================================================= */

        $sql = "
            INSERT INTO formularios_salvos
            (
                id_usuario,
                nome,
                familia,
                genero,
                ocasiao,
                intensidade,
                perfumes_ids
            )
            VALUES
            (
                $id_usuario,
                '$nome',
                '$familia',
                '$genero',
                '$ocasiao',
                '$intensidade',
                '$perfumes_ids'
            )
        ";


        if(mysqli_query($conexao, $sql)){

            $id_avaliacao = mysqli_insert_id($conexao);

            header(
                "Location: /perfumatch/perfil/formulario_salvo.php?id=" .
                $id_avaliacao
            );

            exit;

        }else{

            $erro = "Erro ao salvar a avaliação: " .
                    mysqli_error($conexao);

        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Descubra seu Perfume Ideal</title>

<link
    rel="stylesheet"
    href="includes/style.css"
>


<style>

/* =========================================================
   CONTAINER
========================================================= */

.form-container{

    max-width:1100px;

    margin:40px auto 60px;

    background:#021c34;

    padding:45px 40px;

    border-radius:16px;

    border:1px solid #043a63;

    box-shadow:
        0 10px 40px rgba(0,0,0,.5);
}


/* =========================================================
   TÍTULO
========================================================= */

.form-container h2{

    text-align:center;

    color:#00bfff;

    font-size:28px;

    font-weight:300;

    letter-spacing:4px;

    text-transform:uppercase;

    margin-bottom:30px;

    padding-bottom:20px;

    border-bottom:1px solid #043a63;
}


.subtitulo{

    text-align:center;

    color:#8899aa;

    margin-bottom:25px;
}


/* =========================================================
   FORMULÁRIO
========================================================= */

.form-perguntas{

    display:flex;

    flex-direction:column;

    gap:18px;
}


.pergunta{

    display:flex;

    flex-direction:column;

    gap:6px;
}


.pergunta label{

    color:#e8e8e8;

    font-size:14px;
}


.pergunta select,
.nome-preferencia{

    width:100%;

    padding:12px 16px;

    background:#010b16;

    border:1px solid #043a63;

    border-radius:8px;

    color:#fff;

    outline:none;
}


.pergunta select:focus,
.nome-preferencia:focus{

    border-color:#00bfff;
}


/* =========================================================
   BOTÕES
========================================================= */

.btn-descobrir,
.btn-salvar{

    padding:13px;

    background:transparent;

    border:1px solid #00bfff55;

    border-radius:8px;

    color:#e8e8e8;

    cursor:pointer;

    transition:.3s;
}


.btn-descobrir{

    width:100%;

    margin-top:10px;

    letter-spacing:3px;
}


.btn-descobrir:hover,
.btn-salvar:hover{

    background:#00bfff;

    color:#010b16;

    border-color:#00bfff;
}


/* =========================================================
   RESULTADO
========================================================= */

.resultado{

    margin-top:35px;

    padding-top:30px;

    border-top:1px solid #043a63;
}


.perfil-usuario{

    text-align:center;

    margin-bottom:25px;
}


.perfil-usuario h3{

    color:#e8e8e8;

    font-weight:300;
}


.perfil-usuario p{

    color:#00bfff;
}


/* =========================================================
   ÁREA DE SALVAR
========================================================= */

.salvar-area{

    background:#010b16;

    border:1px solid #043a63;

    border-radius:10px;

    padding:20px;

    margin-bottom:30px;

    text-align:center;
}


.salvar-titulo{

    color:#e8e8e8;

    margin-bottom:12px;
}


.salvar-form{

    display:flex;

    gap:10px;
}


.nome-preferencia{

    flex:1;
}


/* =========================================================
   LISTA DE PERFUMES
========================================================= */

.lista-perfumes{

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:25px;
}


/* =========================================================
   FAIXAS DE PREÇO
========================================================= */

.titulo-faixa{

    grid-column:1/-1;

    text-align:center;

    color:#8899aa;

    font-size:18px;

    font-weight:300;

    letter-spacing:2px;

    padding-bottom:10px;

    border-bottom:1px solid #043a63;

    margin-top:20px;
}


/* =========================================================
   LINK DO CARD
========================================================= */

.link-perfume{

    display:block;

    text-decoration:none;

    color:white;

    height:100%;
}


/* =========================================================
   CARD
========================================================= */

.card-perfume{

    background:#010b16;

    padding:20px;

    border-radius:12px;

    text-align:center;

    border:1px solid #043a63;

    transition:.3s;

    height:100%;

    box-sizing:border-box;

    cursor:pointer;
}


.card-perfume:hover{

    transform:translateY(-5px);

    border-color:#00bfff66;

    box-shadow:
        0 8px 25px rgba(0,191,255,.12);
}


/* =========================================================
   IMAGEM
========================================================= */

.card-perfume img{

    width:150px;

    height:180px;

    object-fit:contain;

    display:block;

    margin:0 auto 10px;
}


/* =========================================================
   NOME
========================================================= */

.card-perfume h3{

    color:#fff;

    font-size:15px;

    font-weight:300;
}


/* =========================================================
   MARCA
========================================================= */

.marca{

    color:#8899aa;

    font-size:13px;
}


/* =========================================================
   PREÇO
========================================================= */

.preco{

    color:#00bfff;

    font-size:15px;
}


/* =========================================================
   AVALIAÇÃO
========================================================= */

.avaliacao-card{

    border-top:1px solid #043a63;

    padding-top:8px;

    margin-top:10px;
}


.estrelas-card{

    color:gold;

    letter-spacing:2px;
}


.nota-card{

    color:#8899aa;

    font-size:12px;
}


/* =========================================================
   NOTIFICAÇÕES
========================================================= */

.notificacao{

    padding:14px;

    margin-bottom:20px;

    text-align:center;

    border-radius:8px;

    color:#66d9a0;

    background:#062d28;

    border:1px solid #66d9a055;
}


.erro{

    color:#ff6b6b;

    background:#2d1111;

    border-color:#ff6b6b55;
}


/* =========================================================
   SEM RESULTADOS
========================================================= */

.sem-resultados{

    grid-column:1/-1;

    text-align:center;

    color:#8899aa;

    padding:20px;
}


/* =========================================================
   RESPONSIVO
========================================================= */

@media(max-width:900px){

    .lista-perfumes{

        grid-template-columns:
            repeat(2,1fr);

    }

}


@media(max-width:600px){

    .lista-perfumes{

        grid-template-columns:1fr;

    }


    .salvar-form{

        flex-direction:column;

    }

}

</style>

</head>


<body>


<div class="form-container">


<h2>
    Descubra sua fragrância ideal
</h2>


<p class="subtitulo">
    Encontre o perfume perfeito para seu estilo
</p>


<?php if($erro): ?>

<div class="notificacao erro">

    <?php
    echo htmlspecialchars($erro);
    ?>

</div>

<?php endif; ?>


<!-- =====================================================
     FORMULÁRIO
===================================================== -->

<form
    method="POST"
    class="form-perguntas"
>


<!-- =====================================================
     GÊNERO
===================================================== -->

<div class="pergunta">

<label>
    Gênero
</label>


<select
    name="genero"
    required
>

<option value="">
    Selecione
</option>

<option value="Masculino">
    Masculino
</option>

<option value="Feminino">
    Feminino
</option>

</select>

</div>


<div class="pergunta">

<label>
    Família olfativa
</label>


<select
    name="familia"
    required
>

<option value="">
    Selecione
</option>

<option value="amadeirado">
    Amadeirado
</option>

<option value="doce">
    Doce
</option>

<option value="citrico">
    Cítrico
</option>

<option value="frutado">
    Frutado
</option>

<option value="aquatico">
    Aquático
</option>

</select>

</div>


<div class="pergunta">

<label>
    Ocasião
</label>


<select
    name="ocasiao"
    required
>

<option value="">
    Selecione
</option>

<option value="dia">
    Dia a dia
</option>

<option value="trabalho">
    Trabalho
</option>

<option value="balada">
    Balada
</option>

<option value="encontro">
    Encontro
</option>

<option value="academia">
    Academia
</option>

</select>

</div>


<div class="pergunta">

<label>
    Intensidade
</label>


<select
    name="intensidade"
    required
>

<option value="">
    Selecione
</option>

<option value="leve">
    Leve
</option>

<option value="media">
    Média
</option>

<option value="forte">
    Forte
</option>

</select>

</div>


<button
    type="submit"
    name="enviar"
    class="btn-descobrir"
>

    Descobrir

</button>


</form>


<div class="resultado">


<?php


/* =========================================================
   GERAR RESULTADOS
========================================================= */

if(isset($_POST['enviar'])){


    $familia = mysqli_real_escape_string(
        $conexao,
        $_POST['familia'] ?? ''
    );


    $genero = mysqli_real_escape_string(
        $conexao,
        $_POST['genero'] ?? ''
    );


    $ocasiao = mysqli_real_escape_string(
        $conexao,
        $_POST['ocasiao'] ?? ''
    );


    $intensidade = mysqli_real_escape_string(
        $conexao,
        $_POST['intensidade'] ?? ''
    );


    echo "

    <div class='perfil-usuario'>

        <h3>
            Seu perfil
        </h3>

        <p>

            ".htmlspecialchars(
                ucfirst($genero)
            )."

            •

            ".htmlspecialchars(
                ucfirst($familia)
            )."

            •

            ".htmlspecialchars(
                ucfirst($ocasiao)
            )."

            •

            ".htmlspecialchars(
                ucfirst($intensidade)
            )."

        </p>

    </div>

    ";


    /* =====================================================
       FAIXAS DE PREÇO
    ===================================================== */

    $faixas = [

        [
            'Acima de R$ 1.000',
            'preco >= 1000'
        ],

        [
            'R$ 700 até R$ 999',
            'preco BETWEEN 700 AND 999'
        ],

        [
            'R$ 400 até R$ 699',
            'preco BETWEEN 400 AND 699'
        ],

        [
            'Até R$ 399',
            'preco <= 399'
        ]

    ];


    /*
     * IDs dos perfumes que serão salvos
     */

    $ids_salvar = [];


    echo "<div class='lista-perfumes'>";


    /* =====================================================
       PERCORRER FAIXAS
    ===================================================== */

    foreach($faixas as $faixa){


        echo "

        <h3 class='titulo-faixa'>

            {$faixa[0]}

        </h3>

        ";


        /* =================================================
           BUSCA PRINCIPAL
        ================================================= */

        $sql = "

            SELECT *

            FROM perfumes

            WHERE familia LIKE '%$familia%'

            AND FIND_IN_SET(
                '$ocasiao',
                REPLACE(ocasiao, ' ', '')
            )

            AND intensidade = '$intensidade'

            AND genero IN ('$genero', 'Unissex')

            AND {$faixa[1]}

            ORDER BY RAND()

            LIMIT 3

        ";


        $resultado = mysqli_query(
            $conexao,
            $sql
        );


        /* =================================================
           BUSCA ALTERNATIVA
        ================================================= */

        if(
            !$resultado ||
            mysqli_num_rows($resultado) == 0
        ){

            $sql = "

                SELECT *

                FROM perfumes

                WHERE familia LIKE '%$familia%'

                AND FIND_IN_SET(
                    '$ocasiao',
                    REPLACE(ocasiao, ' ', '')
                )

                AND genero IN ('$genero', 'Unissex')

                AND {$faixa[1]}

                ORDER BY RAND()

                LIMIT 3

            ";


            $resultado = mysqli_query(
                $conexao,
                $sql
            );

        }


        /* =================================================
           RESULTADOS ENCONTRADOS
        ================================================= */

        if(
            $resultado &&
            mysqli_num_rows($resultado) > 0
        ){


            while(
                $perfume =
                mysqli_fetch_assoc($resultado)
            ){


                /* =========================================
                   GUARDAR ID
                ========================================= */

                $ids_salvar[] =
                    (int)$perfume['id'];


                /* =========================================
                   BUSCAR AVALIAÇÃO
                ========================================= */

                $nome_sql =
                    mysqli_real_escape_string(
                        $conexao,
                        $perfume['nome']
                    );


                $av = mysqli_query(

                    $conexao,

                    "SELECT

                        AVG(nota) AS media,

                        COUNT(*) AS total

                     FROM avaliacoes

                     WHERE nome_perfume='$nome_sql'"

                );


                if($av){

                    $dados =
                        mysqli_fetch_assoc($av);

                }else{

                    $dados = [

                        'media' => 0,

                        'total' => 0

                    ];

                }


                $media =

                    $dados['media']

                    ?

                    round(
                        $dados['media'],
                        1
                    )

                    :

                    0;


                /* =========================================
                   LINK CORRETO
                ========================================= */

                $id_perfume =
                    (int)$perfume['id'];


                ?>


                <!-- ======================================
                     CARD DO PERFUME
                ======================================= -->

                <a
                    href="/perfumatch/abrir_perfume.php?id=<?php echo $id_perfume; ?>"
                    class="link-perfume"
                >


                    <div class="card-perfume">


                        <!-- IMAGEM -->

                        <img
                            src="/perfumatch/uploads/<?php

                                echo htmlspecialchars(
                                    $perfume['imagem']
                                );

                            ?>"
                            alt="<?php

                                echo htmlspecialchars(
                                    $perfume['nome']
                                );

                            ?>"
                        >


                        <!-- NOME -->

                        <h3>

                            <?php

                            echo htmlspecialchars(
                                $perfume['nome']
                            );

                            ?>

                        </h3>


                        <!-- MARCA -->

                        <p class="marca">

                            <?php

                            echo htmlspecialchars(
                                $perfume['marca']
                            );

                            ?>

                        </p>


                        <!-- PREÇO -->

                        <p class="preco">

                            R$

                            <?php

                            echo number_format(

                                $perfume['preco'],

                                2,

                                ',',

                                '.'

                            );

                            ?>

                        </p>


                        <!-- AVALIAÇÃO -->

                        <div class="avaliacao-card">


                            <span class="estrelas-card">

                                <?php

                                echo str_repeat(
                                    '★',
                                    round($media)
                                );

                                ?>

                            </span>


                            <span class="nota-card">

                                <?php

                                echo $media;

                                ?>

                                (

                                <?php

                                echo (int)$dados['total'];

                                ?>

                                )

                            </span>


                        </div>


                    </div>


                </a>


                <?php


            }


        }else{


            echo "

            <p class='sem-resultados'>

                Nenhum perfume encontrado
                nesta faixa.

            </p>

            ";

        }

    }


    echo "</div>";


    /* =====================================================
       SALVAR AVALIAÇÃO
    ===================================================== */

    if(
        $logado &&
        !empty($ids_salvar)
    ){


        /*
         * Remove IDs repetidos
         */

        $ids_salvar =
            array_unique(
                $ids_salvar
            );


        /*
         * Transforma:
         *
         * [1, 5, 9, 12]
         *
         * em:
         *
         * 1,5,9,12
         */

        $ids =
            implode(
                ',',
                $ids_salvar
            );


        ?>


        <div class="salvar-area">


            <div class="salvar-titulo">

                Gostou desta combinação?

                Salve sua avaliação.

            </div>


            <form
                method="POST"
                class="salvar-form"
            >


                <!-- NOME DA AVALIAÇÃO -->

                <input
                    type="text"
                    name="nome_preferencia"
                    class="nome-preferencia"
                    placeholder="Nome da avaliação (opcional)"
                    maxlength="150"
                >


                <!-- GÊNERO -->

                <input
                    type="hidden"
                    name="genero_salvar"
                    value="<?php

                        echo htmlspecialchars(
                            $genero
                        );

                    ?>"
                >


                <!-- FAMÍLIA -->

                <input
                    type="hidden"
                    name="familia_salvar"
                    value="<?php

                        echo htmlspecialchars(
                            $familia
                        );

                    ?>"
                >


                <!-- OCASIÃO -->

                <input
                    type="hidden"
                    name="ocasiao_salvar"
                    value="<?php

                        echo htmlspecialchars(
                            $ocasiao
                        );

                    ?>"
                >


                <!-- INTENSIDADE -->

                <input
                    type="hidden"
                    name="intensidade_salvar"
                    value="<?php

                        echo htmlspecialchars(
                            $intensidade
                        );

                    ?>"
                >


                <!-- IDs DOS PERFUMES -->

                <input
                    type="hidden"
                    name="perfumes_ids"
                    value="<?php

                        echo htmlspecialchars(
                            $ids
                        );

                    ?>"
                >


                <!-- BOTÃO -->

                <button
                    type="submit"
                    name="salvar_formulario"
                    class="btn-salvar"
                >

                    ♡ Salvar avaliação

                </button>


            </form>


        </div>


        <?php

    }

}

?>


</div>


</div>


</body>

</html>