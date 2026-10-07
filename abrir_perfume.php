<?php

require_once(__DIR__ . "/includes/conexao.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* =========================
   VERIFICAR ID
========================= */

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Perfume não informado.");
}

$id = (int) $_GET['id'];


/* =========================
   BUSCAR PERFUME
========================= */

$sql = "
    SELECT *
    FROM perfumes
    WHERE id = $id
    LIMIT 1
";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro ao consultar o perfume: " . mysqli_error($conexao));
}

if (mysqli_num_rows($resultado) == 0) {
    die("Perfume não encontrado.");
}

$perfume = mysqli_fetch_assoc($resultado);


/* =========================
   DEFINIR PÁGINA
========================= */

/*
 * Como sua tabela não possui a coluna "pagina",
 * vamos usar o nome do perfume para descobrir
 * o arquivo correspondente.
 *
 * Exemplo:
 *
 * Neroli Portofino
 * ↓
 * neroliportofino.php
 *
 * 1 Million Elixir
 * ↓
 * 1millionelixir.php
 */


/* Primeiro tentamos encontrar um arquivo
   com o nome do perfume */

$nome = $perfume['nome'] ?? '';

$nome_arquivo = strtolower($nome);


/*
 * Remove acentos
 */

$nome_arquivo = iconv(
    'UTF-8',
    'ASCII//TRANSLIT//IGNORE',
    $nome_arquivo
);


/*
 * Remove tudo que não for letra ou número
 */

$nome_arquivo = preg_replace(
    '/[^a-z0-9]/',
    '',
    $nome_arquivo
);


/*
 * Nome final do arquivo
 */

$pagina = $nome_arquivo . ".php";


/* =========================
   CAMINHO DA PÁGINA
========================= */

$caminho = __DIR__ . "/perfumes/" . $pagina;


/* =========================
   VERIFICAR SE EXISTE
========================= */

if (file_exists($caminho)) {

    header(
        "Location: /perfumatch/perfumes/" .
        rawurlencode($pagina)
    );

    exit;

}


/* =========================
   SEGUNDA TENTATIVA
========================= */

/*
 * Caso o nome do perfume não corresponda
 * exatamente ao nome do arquivo, procuramos
 * dentro da pasta perfumes.
 */

$pasta = __DIR__ . "/perfumes/";

$arquivos = glob($pasta . "*.php");

$encontrado = false;

foreach ($arquivos as $arquivo) {

    $nome_arquivo_existente = basename($arquivo);

    /*
     * Remove a extensão
     */

    $nome_sem_extensao = pathinfo(
        $nome_arquivo_existente,
        PATHINFO_FILENAME
    );

    /*
     * Normaliza o nome do arquivo existente
     */

    $normalizado_existente = strtolower(
        iconv(
            'UTF-8',
            'ASCII//TRANSLIT//IGNORE',
            $nome_sem_extensao
        )
    );

    $normalizado_existente = preg_replace(
        '/[^a-z0-9]/',
        '',
        $normalizado_existente
    );


    /*
     * Compara com o nome do perfume
     */

    if ($normalizado_existente === $nome_arquivo) {

        $pagina = $nome_arquivo_existente;

        $encontrado = true;

        break;
    }
}


/* =========================
   REDIRECIONAR
========================= */

if ($encontrado) {

    header(
        "Location: /perfumatch/perfumes/" .
        rawurlencode($pagina)
    );

    exit;
}


/* =========================
   NÃO ENCONTROU
========================= */

die("
    <div style='
        font-family:Arial;
        text-align:center;
        margin-top:120px;
        color:white;
        background:#010b16;
        padding:40px;
    '>

        <h2>Perfume encontrado no banco.</h2>

        <p>
            Porém, a página deste perfume não foi encontrada.
        </p>

        <p>
            Perfume:
            <strong>" . htmlspecialchars($nome) . "</strong>
        </p>

        <p>
            Arquivo procurado:
            <strong>" . htmlspecialchars($pagina) . "</strong>
        </p>

        <br>

        <a
            href='/perfumatch/formulario.php'
            style='color:#00bfff;'
        >
            Voltar para o formulário
        </a>

    </div>
");

?>