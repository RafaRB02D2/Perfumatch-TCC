<?php
include("../includes/conexao.php");
require_once("../includes/header.php");

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['usuario_id'])){
    die("Você precisa estar logado.");
}

$id = $_SESSION['usuario_id'];

/* =========================
   EXCLUIR AVALIAÇÃO
========================= */

if(isset($_GET['excluir_avaliacao'])){

    $id_avaliacao = intval($_GET['excluir_avaliacao']);

    mysqli_query(
        $conexao,
        "DELETE FROM formularios_salvos
         WHERE id='$id_avaliacao'
         AND id_usuario='$id'"
    );

    header("Location: perfil.php");
    exit;
}


/* =========================
   ALTERAR SENHA
========================= */

if(isset($_POST['nova_senha'])){

    $nova = md5($_POST['nova_senha']);

    mysqli_query(
        $conexao,
        "UPDATE usuarios
         SET senha='$nova'
         WHERE id='$id'"
    );

    $msg = "Senha alterada com sucesso!";
}


/* =========================
   USUÁRIO
========================= */

$res = mysqli_query(
    $conexao,
    "SELECT * FROM usuarios WHERE id='$id'"
);

$user = mysqli_fetch_assoc($res);


/* =========================
   AVALIAÇÕES
========================= */

$res_formularios = mysqli_query(
    $conexao,
    "SELECT *
     FROM formularios_salvos
     WHERE id_usuario='$id'
     ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Perfil</title>

<link rel="stylesheet" href="../includes/style.css">

<style>

.perfil-container{
    max-width:700px;
    margin:100px auto 60px;
    background:#021c34;
    border-radius:16px;
    padding:40px;
    border:1px solid #043a63;
    box-shadow:0 10px 40px rgba(0,0,0,.5);
}

.perfil-titulo{
    text-align:center;
    font-size:28px;
    color:#00bfff;
    font-weight:300;
    letter-spacing:4px;
    text-transform:uppercase;
    margin-bottom:30px;
    padding-bottom:20px;
    border-bottom:1px solid #043a63;
}

.info-usuario{
    display:flex;
    flex-direction:column;
    gap:12px;
    margin-bottom:30px;
}

.info-item{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid #043a6344;
}

.info-label{
    color:#8899aa;
    font-size:14px;
}

.info-value{
    color:#fff;
    font-size:15px;
}

.divisor{
    border:0;
    border-top:1px solid #043a63;
    margin:25px 0;
}

.titulo-secao{
    color:#e8e8e8;
    font-size:18px;
    font-weight:300;
    letter-spacing:2px;
    margin-bottom:15px;
}

/* AVALIAÇÕES */

.avaliacoes-lista{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.avaliacao-item{
    background:#010b16;
    border:1px solid #043a63;
    border-radius:10px;
    padding:20px;
}

.avaliacao-nome{
    color:#fff;
    font-size:16px;
    margin-bottom:12px;
}

.avaliacao-info{
    color:#8899aa;
    font-size:12px;
    line-height:1.8;
}

.botoes-avaliacao{
    display:flex;
    gap:8px;
    margin-top:15px;
}

.btn-abrir,
.btn-excluir{
    flex:1;
    text-align:center;
    padding:10px;
    border-radius:7px;
    text-decoration:none;
    font-size:13px;
    transition:.3s;
}

.btn-abrir{
    border:1px solid #00bfff55;
    color:#e8e8e8;
}

.btn-abrir:hover{
    background:#00bfff;
    color:#010b16;
}

.btn-excluir{
    border:1px solid #ff6b6b55;
    color:#ff6b6b;
}

.btn-excluir:hover{
    background:#ff6b6b;
    color:#010b16;
}

.sem-avaliacoes{
    text-align:center;
    color:#8899aa;
    padding:20px;
    grid-column:1/-1;
}

/* SENHA */

.senha-form{
    display:flex;
    gap:12px;
}

.senha-input{
    flex:1;
    padding:12px 16px;
    background:#010b16;
    border:1px solid #043a63;
    border-radius:8px;
    color:#fff;
    outline:none;
}

.btn-alterar{
    padding:12px 30px;
    background:transparent;
    border:1px solid #00bfff55;
    border-radius:8px;
    color:#e8e8e8;
    cursor:pointer;
}

.btn-alterar:hover{
    background:#00bfff;
    color:#010b16;
}

.msg-sucesso{
    color:#66d9a0;
    text-align:center;
    margin-top:12px;
}

/* FAVORITOS */

.favoritos-lista{
    display:flex;
    flex-direction:column;
    gap:10px;
}

.favorito-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#010b16;
    padding:12px 16px;
    border-radius:8px;
    border:1px solid #043a6344;
}

.favorito-nome{
    color:#e8e8e8;
    font-size:14px;
}

.heart{
    color:#ff6b6b;
    margin-right:8px;
}

.btn-remover{
    color:#ff6b6b;
    text-decoration:none;
    font-size:12px;
    padding:4px 12px;
    border:1px solid #ff6b6b33;
    border-radius:4px;
}

.btn-remover:hover{
    background:#ff6b6b;
    color:#010b16;
}

.btn-sair{
    display:block;
    text-align:center;
    padding:14px;
    border:1px solid #ff6b6b55;
    border-radius:8px;
    color:#ff6b6b;
    text-decoration:none;
    letter-spacing:2px;
}

.btn-sair:hover{
    background:#ff6b6b;
    color:#010b16;
}

@media(max-width:600px){

    .perfil-container{
        margin:80px 15px 40px;
        padding:25px;
    }

    .senha-form{
        flex-direction:column;
    }

    .avaliacoes-lista{
        grid-template-columns:1fr;
    }

    .info-item{
        flex-direction:column;
    }

    .botoes-avaliacao{
        flex-direction:column;
    }
}

</style>

</head>

<body>

<div class="perfil-container">

<h2 class="perfil-titulo">Meu Perfil</h2>


<!-- USUÁRIO -->

<div class="info-usuario">

    <div class="info-item">

        <span class="info-label">
            Nome
        </span>

        <span class="info-value">
            <?= htmlspecialchars($user['nome']) ?>
        </span>

    </div>

    <div class="info-item">

        <span class="info-label">
            Email
        </span>

        <span class="info-value">
            <?= htmlspecialchars($user['email']) ?>
        </span>

    </div>

</div>


<hr class="divisor">


<!-- AVALIAÇÕES -->

<h3 class="titulo-secao">
    Minhas avaliações
</h3>

<div class="avaliacoes-lista">

<?php if(mysqli_num_rows($res_formularios) == 0): ?>

    <p class="sem-avaliacoes">
        Você ainda não salvou nenhuma avaliação.
    </p>

<?php else: ?>

    <?php while($form = mysqli_fetch_assoc($res_formularios)): ?>

        <div class="avaliacao-item">

            <div class="avaliacao-nome">
                <?= htmlspecialchars($form['nome']) ?>
            </div>

            <div class="avaliacao-info">

                Família:
                <?= htmlspecialchars($form['familia']) ?>

                <br>

                Ocasião:
                <?= htmlspecialchars($form['ocasiao']) ?>

                <br>

                Intensidade:
                <?= htmlspecialchars($form['intensidade']) ?>

            </div>

            <div class="botoes-avaliacao">

                <a
                    href="formulario_salvo.php?id=<?= $form['id'] ?>"
                    class="btn-abrir"
                >
                    Abrir avaliação
                </a>

                <a
                    href="perfil.php?excluir_avaliacao=<?= $form['id'] ?>"
                    class="btn-excluir"
                    onclick="return confirm('Tem certeza que deseja excluir esta avaliação?')"
                >
                    Excluir
                </a>

            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

</div>


<hr class="divisor">


<!-- SENHA -->

<h3 class="titulo-secao">
    Alterar Senha
</h3>

<form method="POST" class="senha-form">

    <input
        type="password"
        name="nova_senha"
        placeholder="Nova senha"
        required
        class="senha-input"
    >

    <button type="submit" class="btn-alterar">
        Alterar
    </button>

</form>

<?php if(isset($msg)): ?>

    <p class="msg-sucesso">
        <?= htmlspecialchars($msg) ?>
    </p>

<?php endif; ?>


<hr class="divisor">


<!-- FAVORITOS -->

<h3 class="titulo-secao">
    Perfumes Favoritos
</h3>

<div class="favoritos-lista">

<?php

$resultado = mysqli_query(
    $conexao,
    "SELECT *
     FROM favoritos
     WHERE id_usuario='$id'
     ORDER BY id DESC"
);

if(mysqli_num_rows($resultado) == 0):

?>

    <p class="sem-avaliacoes">
        Nenhum perfume favoritado ainda
    </p>

<?php else: ?>

    <?php while($fav = mysqli_fetch_assoc($resultado)): ?>

        <div class="favorito-item">

            <span class="favorito-nome">

                <span class="heart">
                    ❤
                </span>

                <?= htmlspecialchars($fav['perfume']) ?>

            </span>

            <a
                href="/perfumatch/remover_favorito.php?id=<?= $fav['id'] ?>"
                class="btn-remover"
            >
                Remover
            </a>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

</div>


<hr class="divisor">


<a
    href="/perfumatch/logout.php"
    class="btn-sair"
>
    Sair da conta
</a>

</div>

</body>
</html>