<?php

require_once("../includes/conexao.php");
require_once("../includes/header.php");

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

/* =========================
   VERIFICAR LOGIN
========================= */

if(!isset($_SESSION['usuario_id'])){
    die("Você precisa estar logado.");
}

$id_usuario = intval($_SESSION['usuario_id']);


/* =========================
   PEGAR ID DA AVALIAÇÃO
========================= */

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if($id <= 0){
    die("Avaliação inválida.");
}


/* =========================
   EXCLUIR AVALIAÇÃO
========================= */

if(isset($_POST['excluir_avaliacao'])){

    $sql_delete = "
        DELETE FROM formularios_salvos
        WHERE id='$id'
        AND id_usuario='$id_usuario'
    ";

    if(mysqli_query($conexao, $sql_delete)){
        header("Location: perfil.php");
        exit;
    }else{
        $erro = "Não foi possível excluir a avaliação.";
    }
}


/* =========================
   BUSCAR AVALIAÇÃO
========================= */

$sql = "
    SELECT *
    FROM formularios_salvos
    WHERE id='$id'
    AND id_usuario='$id_usuario'
    LIMIT 1
";

$resultado = mysqli_query($conexao, $sql);

if(!$resultado || mysqli_num_rows($resultado) == 0){
    die("Avaliação não encontrada.");
}

$form = mysqli_fetch_assoc($resultado);


/* =========================
   PEGAR PERFUMES
========================= */

$ids = trim($form['perfumes_ids']);

$perfumes = [];

if($ids != ""){

    $ids_array = array_filter(
        array_map('intval', explode(',', $ids))
    );

    if(count($ids_array) > 0){

        $ids_sql = implode(',', $ids_array);

        $sql_perfumes = "
            SELECT *
            FROM perfumes
            WHERE id IN ($ids_sql)
        ";

        $res_perfumes = mysqli_query(
            $conexao,
            $sql_perfumes
        );

        if($res_perfumes){

            while($p = mysqli_fetch_assoc($res_perfumes)){
                $perfumes[] = $p;
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

<title>
<?= htmlspecialchars($form['nome']) ?> - PerfumeMatch
</title>

<link rel="stylesheet" href="../includes/style.css">

<style>

.container-avaliacao{
    max-width:1100px;
    margin:80px auto 60px;
    padding:40px;
    background:#021c34;
    border:1px solid #043a63;
    border-radius:16px;
    box-shadow:0 10px 40px rgba(0,0,0,.5);
}

.titulo{
    text-align:center;
    color:#00bfff;
    font-size:28px;
    font-weight:300;
    letter-spacing:3px;
    margin-bottom:10px;
}

.subtitulo{
    text-align:center;
    color:#8899aa;
    margin-bottom:30px;
}

.perfil{
    text-align:center;
    background:#010b16;
    border:1px solid #043a63;
    border-radius:10px;
    padding:20px;
    margin-bottom:30px;
}

.perfil h3{
    color:#fff;
    font-weight:300;
    margin-bottom:12px;
}

.perfil p{
    color:#00bfff;
    margin:6px 0;
}

.acoes{
    display:flex;
    justify-content:center;
    gap:12px;
    margin-bottom:35px;
}

.btn-voltar,
.btn-excluir{
    padding:11px 25px;
    border-radius:7px;
    text-decoration:none;
    cursor:pointer;
    font-size:13px;
}

.btn-voltar{
    color:#e8e8e8;
    border:1px solid #00bfff55;
    background:transparent;
}

.btn-voltar:hover{
    background:#00bfff;
    color:#010b16;
}

.btn-excluir{
    color:#ff6b6b;
    border:1px solid #ff6b6b55;
    background:transparent;
}

.btn-excluir:hover{
    background:#ff6b6b;
    color:#010b16;
}

.lista{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.card{
    background:#010b16;
    border:1px solid #043a63;
    border-radius:12px;
    padding:20px;
    text-align:center;
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
    border-color:#00bfff66;
}

.card img{
    width:150px;
    height:180px;
    object-fit:contain;
    margin-bottom:12px;
}

.card h3{
    color:#fff;
    font-size:16px;
    font-weight:300;
    margin-bottom:5px;
}

.marca{
    color:#8899aa;
    font-size:13px;
}

.preco{
    color:#00bfff;
    font-size:16px;
}

.sem-perfumes{
    text-align:center;
    color:#8899aa;
    padding:30px;
}

.erro{
    text-align:center;
    color:#ff6b6b;
    margin-bottom:20px;
}

@media(max-width:900px){

    .lista{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:600px){

    .container-avaliacao{
        margin:50px 15px;
        padding:25px 15px;
    }

    .lista{
        grid-template-columns:1fr;
    }

    .acoes{
        flex-direction:column;
    }

    .btn-voltar,
    .btn-excluir{
        text-align:center;
        width:100%;
    }

}

</style>

</head>

<body>

<div class="container-avaliacao">

    <h1 class="titulo">
        <?= htmlspecialchars($form['nome']) ?>
    </h1>

    <p class="subtitulo">
        Sua avaliação salva
    </p>


    <?php if(isset($erro)): ?>

        <div class="erro">
            <?= htmlspecialchars($erro) ?>
        </div>

    <?php endif; ?>


    <!-- PERFIL DA AVALIAÇÃO -->

    <div class="perfil">

        <h3>
            Perfil escolhido
        </h3>

        <p>
            Família:
            <?= htmlspecialchars(ucfirst($form['familia'])) ?>
        </p>

        <p>
            Ocasião:
            <?= htmlspecialchars(ucfirst($form['ocasiao'])) ?>
        </p>

        <p>
            Intensidade:
            <?= htmlspecialchars(ucfirst($form['intensidade'])) ?>
        </p>

    </div>


    <!-- BOTÕES -->

    <div class="acoes">

        <a
            href="perfil.php"
            class="btn-voltar"
        >
            ← Voltar para o perfil
        </a>


        <form
            method="POST"
            onsubmit="return confirm('Tem certeza que deseja excluir esta avaliação?');"
        >

            <button
                type="submit"
                name="excluir_avaliacao"
                class="btn-excluir"
            >
                Excluir avaliação
            </button>

        </form>

    </div>


    <!-- PERFUMES -->

    <div class="lista">

        <?php if(count($perfumes) == 0): ?>

            <p class="sem-perfumes">
                Nenhum perfume foi encontrado nesta avaliação.
            </p>

        <?php else: ?>

            <?php foreach($perfumes as $perfume): ?>

                <?php

                if(!empty($perfume['pagina'])){

                    $link = $perfume['pagina'];

                }else{

                    $link =
                        strtolower(
                            preg_replace(
                                '/[^a-z0-9]/',
                                '',
                                str_replace(
                                    ' ',
                                    '',
                                    $perfume['nome']
                                )
                            )
                        ) . ".php";
                }

                ?>

                <a
                    href="../perfumes/<?= htmlspecialchars($link) ?>"
                    style="text-decoration:none"
                >

                    <div class="card">

                        <img
                            src="../uploads/<?= htmlspecialchars($perfume['imagem']) ?>"
                            alt="<?= htmlspecialchars($perfume['nome']) ?>"
                        >

                        <h3>
                            <?= htmlspecialchars($perfume['nome']) ?>
                        </h3>

                        <p class="marca">
                            <?= htmlspecialchars($perfume['marca']) ?>
                        </p>

                        <p class="preco">
                            R$
                            <?= number_format(
                                $perfume['preco'],
                                2,
                                ',',
                                '.'
                            ) ?>
                        </p>

                    </div>

                </a>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</div>

</body>

</html>