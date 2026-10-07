<?php

require_once(__DIR__ . "/../includes/conexao.php");

if(session_status() === PHP_SESSION_NONE){
    session_start();
}


/* =========================================================
   VERIFICA LOGIN
   ========================================================= */

if(!isset($_SESSION['usuario_id'])){

    header("Location: /perfumatch/perfil/entrar.php");
    exit;

}

$id_usuario = (int)$_SESSION['usuario_id'];


/* =========================================================
   VERIFICA ID DA AVALIAÇÃO
   ========================================================= */

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){

    die("Avaliação não informada.");

}

$id_avaliacao = (int)$_GET['id'];


/* =========================================================
   BUSCA A AVALIAÇÃO
   ========================================================= */

$sql = "
    SELECT *
    FROM formularios_salvos
    WHERE id = $id_avaliacao
    AND id_usuario = $id_usuario
    LIMIT 1
";

$resultado = mysqli_query($conexao, $sql);

if(!$resultado || mysqli_num_rows($resultado) == 0){

    die("Avaliação não encontrada.");

}

$avaliacao = mysqli_fetch_assoc($resultado);


/* =========================================================
   DADOS DA AVALIAÇÃO
   ========================================================= */

$nome_avaliacao = $avaliacao['nome'];
$familia = $avaliacao['familia'];
$ocasiao = $avaliacao['ocasiao'];
$intensidade = $avaliacao['intensidade'];
$data_criacao = $avaliacao['data_criacao'];


/* =========================================================
   PEGA OS IDS DOS PERFUMES
   ========================================================= */

$ids = array_filter(
    array_map(
        'intval',
        explode(',', $avaliacao['perfumes_ids'])
    )
);


/* =========================================================
   BUSCA OS PERFUMES
   ========================================================= */

$perfumes = [];

if(!empty($ids)){

    $ids_sql = implode(',', $ids);

    $sql_perfumes = "
        SELECT *
        FROM perfumes
        WHERE id IN ($ids_sql)
        ORDER BY FIELD(id, $ids_sql)
    ";

    $resultado_perfumes = mysqli_query($conexao, $sql_perfumes);

    if($resultado_perfumes){

        while($perfume = mysqli_fetch_assoc($resultado_perfumes)){

            $perfumes[] = $perfume;

        }

    }

}


/* =========================================================
   HEADER
   ========================================================= */

require_once(__DIR__ . "/../includes/header.php");

?>

<!-- =========================================================
     GARANTE O CSS PRINCIPAL DO PERFUMATCH
     ========================================================= -->

<link rel="stylesheet" href="/perfumatch/includes/style.css">


<style>

/* =========================================================
   PÁGINA DA AVALIAÇÃO
   ========================================================= */

.pagina-avaliacao{

    width: 100%;
    max-width: 100%;

    margin: 0;
    padding: 40px 20px 70px;

    box-sizing: border-box;

}


/* CONTAINER */

.pagina-avaliacao .avaliacao-container{

    width: 100%;
    max-width: 1200px;

    margin: 0 auto;

    box-sizing: border-box;

}


/* =========================================================
   CABEÇALHO
   ========================================================= */

.pagina-avaliacao .avaliacao-header{

    width: 100%;

    text-align: center;

    margin-bottom: 35px;

}


.pagina-avaliacao .titulo-avaliacao{

    margin: 0 0 10px;

    color: #ffffff;

    font-size: 30px;

    font-weight: 600;

    line-height: 1.3;

}


.pagina-avaliacao .data-avaliacao{

    margin: 0;

    color: #7f9bb3;

    font-size: 14px;

}


/* =========================================================
   INFORMAÇÕES DA AVALIAÇÃO
   ========================================================= */

.pagina-avaliacao .info-avaliacao{

    width: 100%;

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 18px;

    margin-bottom: 45px;

}


.pagina-avaliacao .info-box{

    width: 100%;

    min-height: 85px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    padding: 18px;

    box-sizing: border-box;

    background: #010b16;

    border: 1px solid #043a63;

    border-radius: 10px;

    text-align: center;

}


.pagina-avaliacao .info-box span{

    display: block;

    margin-bottom: 8px;

    color: #7f9bb3;

    font-size: 13px;

}


.pagina-avaliacao .info-box strong{

    display: block;

    color: #00aaff;

    font-size: 16px;

    font-weight: 600;

}


/* =========================================================
   TÍTULO DOS PERFUMES
   ========================================================= */

.pagina-avaliacao .titulo-perfumes{

    width: 100%;

    margin: 0 0 25px;

    padding-bottom: 12px;

    color: #ffffff;

    font-size: 23px;

    font-weight: 600;

    border-bottom: 1px solid #043a63;

    box-sizing: border-box;

}


/* =========================================================
   GRID DOS PERFUMES
   ========================================================= */

.pagina-avaliacao .lista-perfumes{

    width: 100%;

    display: grid;

    grid-template-columns: repeat(3, minmax(0, 1fr));

    gap: 25px;

}


/* =========================================================
   CARD DO PERFUME
   ========================================================= */

.pagina-avaliacao .card-perfume{

    width: 100%;

    min-width: 0;

    padding: 22px 18px;

    box-sizing: border-box;

    background: #010b16;

    border: 1px solid #043a63;

    border-radius: 10px;

    text-align: center;

    transition: all 0.25s ease;

}


.pagina-avaliacao .card-perfume:hover{

    transform: translateY(-5px);

    border-color: #00aaff;

    box-shadow: 0 0 20px rgba(0, 170, 255, 0.15);

}


/* =========================================================
   IMAGEM DO PERFUME
   ========================================================= */

.pagina-avaliacao .card-perfume img{

    display: block;

    width: 150px;

    height: 180px;

    object-fit: contain;

    margin: 0 auto 18px;

}


/* =========================================================
   NOME DO PERFUME
   ========================================================= */

.pagina-avaliacao .card-perfume h3{

    margin: 0 0 7px;

    color: #ffffff;

    font-size: 17px;

    line-height: 1.4;

    font-weight: 600;

}


/* =========================================================
   MARCA
   ========================================================= */

.pagina-avaliacao .card-perfume .marca{

    margin: 0 0 12px;

    color: #8ba3b8;

    font-size: 14px;

}


/* =========================================================
   PREÇO
   ========================================================= */

.pagina-avaliacao .card-perfume .preco{

    min-height: 24px;

    margin: 0 0 17px;

    color: #00aaff;

    font-size: 17px;

    font-weight: bold;

}


/* =========================================================
   BOTÃO VER PERFUME
   ========================================================= */

.pagina-avaliacao .btn-perfume{

    display: inline-block;

    padding: 9px 18px;

    color: #00aaff;

    background: transparent;

    border: 1px solid #00aaff;

    border-radius: 6px;

    text-decoration: none;

    font-size: 14px;

    transition: all 0.25s ease;

}


.pagina-avaliacao .btn-perfume:hover{

    background: #00aaff;

    color: #00111f;

}


/* =========================================================
   SEM PERFUMES
   ========================================================= */

.pagina-avaliacao .sem-perfumes{

    width: 100%;

    padding: 40px 20px;

    box-sizing: border-box;

    color: #8ba3b8;

    background: #010b16;

    border: 1px solid #043a63;

    border-radius: 10px;

    text-align: center;

}


/* =========================================================
   BOTÃO VOLTAR
   ========================================================= */

.pagina-avaliacao .area-voltar{

    width: 100%;

    margin-top: 35px;

    text-align: center;

}


.pagina-avaliacao .btn-voltar{

    display: inline-block;

    padding: 10px 20px;

    color: #8ba3b8;

    background: transparent;

    border: 1px solid #043a63;

    border-radius: 6px;

    text-decoration: none;

    font-size: 14px;

    transition: all 0.25s ease;

}


.pagina-avaliacao .btn-voltar:hover{

    color: #00aaff;

    border-color: #00aaff;

}


/* =========================================================
   TABLET
   ========================================================= */

@media(max-width: 900px){

    .pagina-avaliacao{

        padding: 30px 15px 60px;

    }


    .pagina-avaliacao .lista-perfumes{

        grid-template-columns: repeat(2, minmax(0, 1fr));

    }

}


/* =========================================================
   CELULAR
   ========================================================= */

@media(max-width: 600px){

    .pagina-avaliacao{

        padding: 25px 10px 50px;

    }


    .pagina-avaliacao .titulo-avaliacao{

        font-size: 24px;

    }


    .pagina-avaliacao .info-avaliacao{

        grid-template-columns: 1fr;

        gap: 12px;

        margin-bottom: 35px;

    }


    .pagina-avaliacao .titulo-perfumes{

        font-size: 20px;

    }


    .pagina-avaliacao .lista-perfumes{

        grid-template-columns: 1fr;

        gap: 18px;

    }


    .pagina-avaliacao .card-perfume{

        padding: 20px 15px;

    }

}


/* =========================================================
   CELULAR PEQUENO
   ========================================================= */

@media(max-width: 400px){

    .pagina-avaliacao .titulo-avaliacao{

        font-size: 21px;

    }


    .pagina-avaliacao .card-perfume img{

        width: 135px;

        height: 165px;

    }

}

</style>


<!-- =========================================================
     PÁGINA
     ========================================================= -->

<div class="pagina-avaliacao">

    <div class="avaliacao-container">


        <!-- TÍTULO -->

        <div class="avaliacao-header">

            <h1 class="titulo-avaliacao">

                <?php echo htmlspecialchars($nome_avaliacao); ?>

            </h1>


            <div class="data-avaliacao">

                Salva em

                <?php

                echo date(
                    "d/m/Y H:i",
                    strtotime($data_criacao)
                );

                ?>

            </div>

        </div>


        <!-- INFORMAÇÕES -->

        <div class="info-avaliacao">


            <div class="info-box">

                <span>
                    Família olfativa
                </span>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        ucfirst($familia)
                    );

                    ?>

                </strong>

            </div>


            <div class="info-box">

                <span>
                    Ocasião
                </span>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        ucfirst($ocasiao)
                    );

                    ?>

                </strong>

            </div>


            <div class="info-box">

                <span>
                    Intensidade
                </span>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        ucfirst($intensidade)
                    );

                    ?>

                </strong>

            </div>


        </div>


        <!-- TÍTULO PERFUMES -->

        <h2 class="titulo-perfumes">

            Perfumes recomendados

        </h2>


        <!-- PERFUMES -->

        <?php if(empty($perfumes)){ ?>


            <div class="sem-perfumes">

                Nenhum perfume foi encontrado nesta avaliação.

            </div>


        <?php }else{ ?>


            <div class="lista-perfumes">


                <?php foreach($perfumes as $perfume){ ?>


                    <div class="card-perfume">


                        <?php if(!empty($perfume['imagem'])){ ?>


                            <img
                                src="/perfumatch/uploads/<?php echo htmlspecialchars($perfume['imagem']); ?>"
                                alt="<?php echo htmlspecialchars($perfume['nome']); ?>"
                            >


                        <?php } ?>


                        <h3>

                            <?php

                            echo htmlspecialchars(
                                $perfume['nome']
                            );

                            ?>

                        </h3>


                        <div class="marca">

                            <?php

                            echo htmlspecialchars(
                                $perfume['marca']
                            );

                            ?>

                        </div>


                        <div class="preco">


                            <?php

                            if(
                                isset($perfume['preco']) &&
                                $perfume['preco'] !== ''
                            ){

                                echo "R$ " . number_format(
                                    (float)$perfume['preco'],
                                    2,
                                    ',',
                                    '.'
                                );

                            }

                            ?>


                        </div>


                        <?php if(!empty($perfume['pagina'])){ ?>


                            <a
                                href="/perfumatch/perfumes/<?php echo htmlspecialchars($perfume['pagina']); ?>"
                                class="btn-perfume"
                            >

                                Ver perfume

                            </a>


                        <?php } ?>


                    </div>


                <?php } ?>


            </div>


        <?php } ?>


        <!-- VOLTAR -->

        <div class="area-voltar">

            <a
                href="/perfumatch/perfil/perfil.php"
                class="btn-voltar"
            >

                ← Voltar para minhas avaliações

            </a>

        </div>


    </div>

</div>