<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../includes/conexao.php");

if(session_status() === PHP_SESSION_NONE){
    session_start();
}


/* =====================================================
   GERAR SLUG
===================================================== */

function gerarSlug($texto){

    $texto = trim($texto);

    $texto = mb_strtolower($texto, 'UTF-8');

    $texto = iconv('UTF-8', 'ASCII//TRANSLIT', $texto);

    $texto = preg_replace('/[^a-z0-9]+/', '-', $texto);

    $texto = trim($texto, '-');

    return $texto;
}


/* =====================================================
   CADASTRAR
===================================================== */

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = isset($_POST["nome"])
        ? trim($_POST["nome"])
        : "";

    $descricao = isset($_POST["descricao"])
        ? trim($_POST["descricao"])
        : "";


    /* =================================================
       VALIDAR
    ================================================= */

    if($nome === ""){

        $erro = "Digite o nome da nota.";

    } elseif($descricao === ""){

        $erro = "Digite a descrição da nota.";

    } else {


        /* =============================================
           GERAR SLUG
        ============================================= */

        $slug = gerarSlug($nome);


        if($slug === ""){

            $erro = "Não foi possível gerar o nome da nota.";

        } else {


            /* =========================================
               NOME AUTOMÁTICO DA IMAGEM

               Morango
               ↓
               morango.png
            ========================================= */

            $imagem = $slug . ".png";


            /* =========================================
               VERIFICAR SE JÁ EXISTE
            ========================================= */

            $sql_verificar = "
                SELECT id
                FROM notas
                WHERE slug = ?
                LIMIT 1
            ";

            $stmt_verificar = mysqli_prepare(
                $conexao,
                $sql_verificar
            );


            if(!$stmt_verificar){

                $erro = "Erro ao preparar consulta: "
                      . mysqli_error($conexao);

            } else {


                mysqli_stmt_bind_param(
                    $stmt_verificar,
                    "s",
                    $slug
                );


                if(!mysqli_stmt_execute($stmt_verificar)){

                    $erro = "Erro ao verificar nota: "
                          . mysqli_stmt_error($stmt_verificar);

                } else {


                    mysqli_stmt_store_result(
                        $stmt_verificar
                    );


                    if(mysqli_stmt_num_rows($stmt_verificar) > 0){

                        $erro = "Essa nota já está cadastrada.";

                    } else {


                        /* =================================
                           INSERIR NO BANCO
                        ================================= */

                        $sql = "
                            INSERT INTO notas
                            (
                                nome,
                                slug,
                                imagem,
                                descricao
                            )
                            VALUES
                            (?, ?, ?, ?)
                        ";


                        $stmt = mysqli_prepare(
                            $conexao,
                            $sql
                        );


                        if(!$stmt){

                            $erro = "Erro ao preparar cadastro: "
                                  . mysqli_error($conexao);

                        } else {


                            mysqli_stmt_bind_param(
                                $stmt,
                                "ssss",
                                $nome,
                                $slug,
                                $imagem,
                                $descricao
                            );


                            if(!mysqli_stmt_execute($stmt)){

                                $erro =
                                    "Erro ao salvar no banco: "
                                    . mysqli_stmt_error($stmt);

                            } else {


                                /* =========================
                                   CRIAR PÁGINA INDIVIDUAL
                                ========================= */

                                $pasta_notas = "../notas/";


                                if(!is_dir($pasta_notas)){

                                    if(!mkdir(
                                        $pasta_notas,
                                        0777,
                                        true
                                    )){

                                        $erro =
                                            "A nota foi salva no banco, "
                                            . "mas não foi possível criar "
                                            . "a pasta notas.";

                                    }

                                }


                                if(!isset($erro)){

                                    $arquivo =
                                        $pasta_notas
                                        . $slug
                                        . ".php";


                                    $nome_php =
                                        addslashes($nome);

                                    $descricao_php =
                                        addslashes($descricao);

                                    $imagem_php =
                                        addslashes($imagem);


                                    $pagina = <<<PHP
<?php

\$nota_nome = "{$nome_php}";
\$nota_descricao = "{$descricao_php}";
\$nota_imagem = "{$imagem_php}";

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars(\$nota_nome); ?> - PerfumeMatch</title>

<link rel="stylesheet" href="../includes/style.css">

<style>

.nota-container{

    width: 90%;

    max-width: 1100px;

    margin: 0 auto;

    padding-top: 120px;

    padding-bottom: 60px;

}

.nota-box{

    background: #021c34;

    border: 1px solid #043a63;

    border-radius: 15px;

    padding: 40px;

    display: grid;

    grid-template-columns: 400px 1fr;

    gap: 50px;

    align-items: center;

}

.nota-imagem{

    width: 100%;

    height: 400px;

    background: #010b16;

    border-radius: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

}

.nota-imagem img{

    width: 100%;

    height: 100%;

    object-fit: contain;

    padding: 20px;

}

.nota-informacoes h1{

    color: #00bfff;

    font-size: 38px;

    margin-bottom: 20px;

}

.nota-informacoes p{

    color: #aabbcc;

    font-size: 17px;

    line-height: 1.8;

}

.nota-linha{

    width: 80px;

    height: 3px;

    background: #00bfff;

    margin-bottom: 25px;

    border-radius: 10px;

}

@media(max-width:800px){

    .nota-box{

        grid-template-columns: 1fr;

    }

}

</style>

</head>

<body>

<?php require_once("../includes/header.php"); ?>

<div class="nota-container">

    <div class="nota-box">

        <div class="nota-imagem">

            <img
                src="../uploads/notas/<?php echo htmlspecialchars(\$nota_imagem); ?>"
                alt="<?php echo htmlspecialchars(\$nota_nome); ?>"
            >

        </div>

        <div class="nota-informacoes">

            <h1>
                <?php echo htmlspecialchars(\$nota_nome); ?>
            </h1>

            <div class="nota-linha"></div>

            <p>
                <?php
                echo nl2br(
                    htmlspecialchars(\$nota_descricao)
                );
                ?>
            </p>

        </div>

    </div>

</div>

</body>

</html>
PHP;


                                    if(file_put_contents(
                                        $arquivo,
                                        $pagina
                                    ) === false){

                                        $erro =
                                            "A nota foi salva no banco, "
                                            . "mas não foi possível criar "
                                            . "a página da nota.";

                                    } else {

                                        $sucesso =
                                            "Nota cadastrada com sucesso! "
                                            . "Ela já está disponível em notas.php.";

                                    }

                                }

                            }


                            mysqli_stmt_close($stmt);

                        }

                    }

                }


                mysqli_stmt_close($stmt_verificar);

            }

        }

    }

}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Adicionar Nota - PerfumeMatch</title>

<link rel="stylesheet" href="../includes/style.css">

<style>

body{

    background: #010b16;

}

.adicionar-nota-container{

    width: 90%;

    max-width: 800px;

    margin: 0 auto;

    padding-top: 130px;

    padding-bottom: 60px;

}

.titulo{

    text-align: center;

    margin-bottom: 30px;

}

.titulo h1{

    color: #00bfff;

    font-size: 36px;

    margin-bottom: 10px;

}

.titulo p{

    color: #aabbcc;

}

.formulario{

    background: #021c34;

    border: 1px solid #043a63;

    border-radius: 15px;

    padding: 35px;

}

.campo{

    margin-bottom: 25px;

}

.campo label{

    display: block;

    color: #ffffff;

    font-weight: bold;

    margin-bottom: 8px;

}

.campo input,
.campo textarea{

    width: 100%;

    box-sizing: border-box;

    background: #010b16;

    border: 1px solid #043a63;

    border-radius: 8px;

    padding: 14px;

    color: #ffffff;

    font-size: 16px;

    outline: none;

}

.campo input:focus,
.campo textarea:focus{

    border-color: #00bfff;

}

.campo textarea{

    min-height: 180px;

    resize: vertical;

}

.botao{

    width: 100%;

    padding: 15px;

    border: none;

    border-radius: 8px;

    background: #00bfff;

    color: #010b16;

    font-size: 16px;

    font-weight: bold;

    cursor: pointer;

}

.sucesso{

    background: rgba(0,200,120,.10);

    border: 1px solid #00c878;

    color: #00e890;

    padding: 15px;

    border-radius: 8px;

    margin-bottom: 20px;

    text-align: center;

}

.erro{

    background: rgba(255,0,0,.10);

    border: 1px solid #ff4444;

    color: #ff6666;

    padding: 15px;

    border-radius: 8px;

    margin-bottom: 20px;

    text-align: center;

}

</style>

</head>

<body>

<?php require_once("../includes/header.php"); ?>

<div class="adicionar-nota-container">

    <div class="titulo">

        <h1>Adicionar Nota</h1>

        <p>
            Cadastre uma nova nota olfativa.
        </p>

    </div>


    <?php if(isset($sucesso)): ?>

        <div class="sucesso">
            <?php echo htmlspecialchars($sucesso); ?>
        </div>

    <?php endif; ?>


    <?php if(isset($erro)): ?>

        <div class="erro">
            <?php echo htmlspecialchars($erro); ?>
        </div>

    <?php endif; ?>


    <form method="POST" class="formulario">

        <div class="campo">

            <label for="nome">
                Nome da nota
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Ex: Morango"
                required
            >

        </div>


        <div class="campo">

            <label for="descricao">
                Descrição
            </label>

            <textarea
                id="descricao"
                name="descricao"
                placeholder="Digite a descrição da nota..."
                required
            ></textarea>

        </div>


        <button
            type="submit"
            class="botao"
        >
            Adicionar Nota
        </button>

    </form>

</div>

</body>

</html>

