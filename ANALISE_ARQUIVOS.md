# Análise de arquivos — Perfumatch

## Resumo
- Arquivos originais: 1.211
- Tamanho original: 24.80 MB
- Arquivos removidos por serem não referenciados: 5
- SQL original renomeado para `perfumatch.sql` e sanitizado para não publicar dados de usuários.

## Arquivos que devem ser mantidos
- PHP da aplicação, incluindo `perfumes/` (400 páginas), `notas/`, `ocasiao/`, `tipos/`, `genero/`, `perfil/`, `admin/` e arquivos da raiz.
- `uploads/`, `uploads/notas/`, `uploads/marcas/` e `imagens/`.
- `includes/style.css`, `includes/script.js`, `perfumes/perfumes.css`.
- `perfumatch.sql` — estrutura e dados necessários do banco, sem registros pessoais.
- `.gitignore`.

## Arquivos removidos com segurança
- `uploads/neroli_portofino.jfif`
- `uploads/modest.jfif`
- `uploads/cedro.jfif`
- `uploads/sandalo.jfif`
- `imagens/yicedcolgne.png`

Esses cinco arquivos não são referenciados pelo código e também não aparecem no dump SQL como nomes de imagem.

## Duplicações encontradas
Foram encontrados 8 pares de arquivos com conteúdo binário idêntico:
1. `imagens/swuspices.webp` / `uploads/swuspices.webp`
2. `imagens/scandalelixir.jfif` / `uploads/scandalelixir.jfif`
3. `imagens/lemaleinblue.webp` / `uploads/lemaleinblue.webp`
4. `imagens/lebeaunarcisse.jpg` / `uploads/lebeaunarcisse.jpg`
5. `imagens/adgedpintense.jfif` / `uploads/adgedpintense.jfif`
6. `uploads/neroli portofino.jfif` / `uploads/neroli_portofino.jfif`
7. `uploads/gentlemanedp.webp` / `uploads/Gentleman EDP.webp`
8. `notas/praline.php` / `notas/pitaya.php`

Os pares 1–5 são usados por caminhos diferentes no projeto, portanto não foram removidos nesta versão conservadora. Os pares 6 é seguro remover uma cópia porque `neroli_portofino.jfif` não é referenciado. O par 7 pode ser consolidado depois alterando uma das páginas para usar o mesmo nome. O par 8 é uma duplicação de conteúdo, mas `notas.php` possui links para as duas páginas; por isso não foi removido automaticamente. Além disso, `praline.php` atualmente contém `$nota_nome = "Pitaya"`, o que indica provável erro de conteúdo, não apenas duplicação.

## Atenção ao GitHub
O SQL original continha registros na tabela `usuarios` com e-mails, hashes de senha e token de recuperação, além de dados associados a usuários. Esses registros foram retirados da versão preparada para o GitHub.
