# Perfumatch

## Sistema de recomendação de perfumes

[![GitHub](https://img.shields.io/badge/GitHub-Repositório-black?logo=github)](https://github.com/RafaRB02D2/Perfumatch-TCC)

------------------------------------------------------------------------

## Integrantes

-   Murillo Falcão Martins
-   Mateus Rezende Camargo
-   Raul Abreu da Silva
-   Rafael Royer Bueno

## Curso

**Técnico de Informática**

## Turma

**3°B**

## Título do projeto

**Perfumatch --- Sistema de recomendação de perfumes**

## Instituição

**Colégio Técnico Bento Quirino**

## Ano

**2026**

## Orientador

**Prof. Mateus Amendola Redivo**

------------------------------------------------------------------------

## Sobre o projeto

A **Perfumatch** é uma plataforma web desenvolvida como Trabalho de
Conclusão de Curso (TCC), com o objetivo de auxiliar os usuários na
escolha de perfumes de acordo com suas preferências, estilo e
necessidades.

A plataforma reúne informações sobre diferentes fragrâncias em um
catálogo, apresentando características como notas olfativas, família
olfativa, intensidade, preço, tipo de perfumaria, gênero e ocasiões de
uso.

O sistema também conta com um **questionário de preferências**,
utilizado para identificar características informadas pelo usuário e
gerar recomendações de perfumes compatíveis.

A proposta da Perfumatch é tornar o processo de escolha de uma
fragrância mais **simples, intuitivo, prático e acessível**,
principalmente para pessoas que possuem pouco conhecimento sobre
perfumaria.

------------------------------------------------------------------------

## Funcionalidades

### Usuário

-   Cadastro de usuário;
-   Login e autenticação;
-   Pesquisa de perfumes por nome;
-   Navegação pelo catálogo;
-   Consulta detalhada dos perfumes;
-   Consulta de notas olfativas;
-   Visualização de perfumes por tipo de perfumaria;
-   Visualização de perfumes por gênero;
-   Visualização de perfumes por ocasião de uso;
-   Questionário de preferências;
-   Sistema de recomendação de perfumes;
-   Organização das recomendações por faixa de preço;
-   Favoritar perfumes;
-   Consulta dos perfumes favoritos;
-   Avaliação de perfumes;
-   Consulta do histórico de questionários e recomendações salvos;
-   Exclusão de registros salvos;
-   Alteração de senha;
-   Encerramento da sessão.

### Administração

A versão atual possui funcionalidades administrativas relacionadas ao
cadastro de informações da plataforma, incluindo:

-   Cadastro de perfumes;
-   Cadastro de notas olfativas;
-   Geração de páginas individuais para novas notas;
-   Gerenciamento das informações utilizadas pelo catálogo.

> **Observação:** a versão atual não possui, no código administrativo
> disponibilizado, uma área completa de edição e exclusão de
> perfumes/notas. Portanto, essas funcionalidades não são consideradas
> funcionalidades implementadas nesta versão.

------------------------------------------------------------------------

## Sistema de recomendação

A Perfumatch utiliza um **sistema de recomendação baseado em regras e
filtros estruturados**.

O usuário responde ao questionário informando características como:

-   Gênero;
-   Família olfativa;
-   Ocasião de uso;
-   Intensidade.

A partir dessas informações, o sistema realiza filtros nos perfumes
cadastrados. Para o gênero, a busca considera também perfumes
classificados como **Unissex**.

Os filtros utilizados na recomendação consideram a família olfativa, a
ocasião, a intensidade e o gênero informado.

Depois da aplicação dos filtros, os resultados são organizados em quatro
faixas de preço:

-   **R\$ 1.000 ou mais**
-   **R\$ 700 a R\$ 999**
-   **R\$ 400 a R\$ 699**
-   **Até R\$ 399**

O sistema apresenta até três perfumes por faixa de preço quando existem
resultados compatíveis.

O usuário autenticado também pode salvar os critérios utilizados no
questionário e os perfumes associados à recomendação para consulta
posterior em seu perfil.

------------------------------------------------------------------------

## Catálogo e organização dos perfumes

O catálogo possui diferentes formas de navegação e classificação.

### Tipos de perfumaria

-   Importados;
-   Nacionais;
-   Árabes;
-   Nicho.

### Gêneros

-   Feminino;
-   Masculino;
-   Unissex, considerado também pelo sistema de recomendação quando
    aplicável.

### Ocasiões

-   Encontro;
-   Escola;
-   Trabalho;
-   Balada;
-   Academia;
-   Reunião.

### Notas olfativas

A plataforma possui uma área dedicada às notas olfativas, com páginas
individuais para diferentes notas cadastradas.

------------------------------------------------------------------------

## Tecnologias utilizadas

O projeto foi desenvolvido utilizando:

-   **HTML** --- estrutura das páginas;
-   **CSS** --- estilização e organização visual;
-   **JavaScript** --- interações e funcionalidades dinâmicas;
-   **PHP** --- processamento e backend;
-   **MariaDB/MySQL** --- banco de dados;
-   **XAMPP** --- ambiente de desenvolvimento e execução local;
-   **JFIF/JPEG, JPG, PNG, WebP e AVIF** --- formatos utilizados nas
    imagens;
-   **Canva** --- criação de elementos visuais, como a logo;
-   **Draw.io** --- criação dos diagramas do projeto.

------------------------------------------------------------------------

## Estrutura do projeto

A aplicação possui, entre outras, as seguintes áreas:

``` text
Perfumatch-TCC/
├── admin/             # Funcionalidades administrativas
├── genero/            # Filtros por gênero
├── imagens/           # Imagens utilizadas pela interface
├── includes/          # Conexão, estilos, scripts e componentes
├── notas/             # Páginas individuais das notas olfativas
├── ocasiao/           # Páginas por ocasião de uso
├── perfil/            # Cadastro, login e área do usuário
├── perfumes/          # Páginas e recursos relacionados aos perfumes
├── tipos/             # Categorias de perfumaria
├── uploads/           # Imagens dos perfumes, notas e marcas
├── formulario.php     # Questionário e recomendações
├── buscar.php         # Pesquisa de perfumes
├── perfume.php        # Catálogo de perfumes
├── abrir_perfume.php  # Visualização individual
├── notas.php          # Catálogo de notas
├── perfumatch.sql     # Banco de dados
└── .gitignore         # Arquivos ignorados pelo Git
```

As imagens utilizadas pelo sistema estão distribuídas principalmente nas
pastas `uploads/`, `uploads/notas/`, `uploads/marcas/` e `imagens/`.

------------------------------------------------------------------------

## Estrutura e funcionamento

A aplicação utiliza **PHP** no backend e **MariaDB/MySQL** através do
ambiente XAMPP.

O sistema utiliza sessões PHP para identificar usuários autenticados e
relacionar suas ações aos respectivos registros.

O banco de dados utilizado pela aplicação possui tabelas relacionadas a:

-   Usuários;
-   Perfumes;
-   Notas;
-   Favoritos;
-   Formulários/questionários salvos;
-   Avaliações;
-   Coleção;
-   Votos.

O arquivo `perfumatch.sql` contém a estrutura necessária do banco e os
dados do catálogo preparados para a publicação do projeto. Os registros
pessoais de usuários presentes na versão original foram removidos da
versão destinada ao GitHub.

------------------------------------------------------------------------

# Como executar

## Pré-requisitos

Para executar o projeto localmente, é necessário possuir:

-   [XAMPP](https://www.apachefriends.org/)
-   Navegador web;
-   Git, caso queira clonar o repositório;
-   Os arquivos deste repositório;
-   O arquivo `perfumatch.sql`.

------------------------------------------------------------------------

## Instalação

### 1. Clonar o repositório

Execute no terminal:

``` bash
git clone https://github.com/RafaRB02D2/Perfumatch-TCC.git perfumatch
```

> O segundo nome (`perfumatch`) faz com que a pasta local tenha o nome
> esperado pelos caminhos utilizados atualmente no código.

Também é possível baixar o projeto diretamente pelo GitHub.

### 2. Colocar o projeto no XAMPP

Se o repositório foi clonado usando o comando acima, a pasta criada
será:

``` text
perfumatch
```

Copie ou mantenha essa pasta dentro do diretório `htdocs` do XAMPP.

Exemplo:

``` text
C:\xampp\htdocs\perfumatch
```

### 3. Iniciar o XAMPP

Abra o **XAMPP Control Panel** e inicie:

-   Apache;
-   MySQL.

No XAMPP, o serviço exibido como MySQL utiliza MariaDB nas versões
correspondentes ao ambiente utilizado para o projeto.

### 4. Configurar o banco de dados

A aplicação está configurada para utilizar:

``` text
Servidor: localhost
Usuário: root
Senha: vazia
Banco de dados: perfumatch
```

Para configurar o banco:

1.  Inicie o Apache e o MySQL pelo XAMPP.
2.  Acesse o phpMyAdmin:

``` text
http://localhost/phpmyadmin/
```

3.  Crie um banco de dados chamado:

``` text
perfumatch
```

4.  Selecione o banco criado.
5.  Acesse a opção **Importar**.
6.  Selecione o arquivo:

``` text
perfumatch.sql
```

7.  Execute a importação.

O arquivo SQL contém a estrutura das tabelas e os dados de catálogo
necessários para a aplicação.

### 5. Acessar a plataforma

Após iniciar o Apache, o banco de dados e realizar a importação do SQL,
acesse:

``` text
http://localhost/perfumatch/
```

> Caso o projeto seja colocado em outra pasta dentro do `htdocs`, os
> caminhos absolutos utilizados pelo código podem precisar ser
> ajustados.

------------------------------------------------------------------------

# Como utilizar

## 1. Cadastro e login

Ao acessar a plataforma, o usuário pode realizar seu cadastro e
posteriormente entrar utilizando suas credenciais.

## 2. Explorar o catálogo

O usuário pode navegar pelo catálogo e consultar perfumes organizados
por diferentes categorias, como:

-   Tipo de perfumaria;
-   Gênero;
-   Ocasião de uso.

Também é possível pesquisar diretamente por um perfume.

## 3. Consultar notas olfativas

A plataforma possui uma área específica para consulta das notas
olfativas.

O usuário pode visualizar diferentes notas e acessar informações
específicas sobre cada uma delas.

## 4. Receber recomendações

O usuário pode responder ao questionário de preferências.

Após o envio, o sistema analisa os critérios informados e apresenta
perfumes considerados compatíveis, organizados de acordo com as faixas
de preço disponíveis.

## 5. Favoritar perfumes

Usuários autenticados podem favoritar perfumes e consultar
posteriormente seus favoritos através da área de perfil.

## 6. Avaliar perfumes

O usuário pode atribuir uma avaliação aos perfumes utilizando uma escala
de **1 a 5**.

As avaliações são utilizadas para apresentar a média e a quantidade de
avaliações associadas ao perfume.

## 7. Consultar o perfil

Na área de usuário é possível:

-   Consultar dados cadastrais;
-   Visualizar questionários e recomendações salvos;
-   Excluir registros salvos;
-   Consultar favoritos;
-   Remover favoritos;
-   Alterar a senha;
-   Encerrar a sessão.

------------------------------------------------------------------------

# Público-alvo

A Perfumatch possui dois principais perfis de público:

### Leigos

Pessoas que possuem pouco conhecimento sobre perfumes e desejam
compreender melhor o universo da perfumaria e encontrar fragrâncias
compatíveis com suas preferências.

### Consumidores regulares

Pessoas que já possuem familiaridade com perfumes e desejam utilizar
recursos mais específicos e informativos da plataforma, como a consulta
de notas olfativas.

------------------------------------------------------------------------

# Proteção de dados e segurança

A Perfumatch possui funcionalidades de cadastro, autenticação e
armazenamento de informações relacionadas aos usuários. Por isso, o
projeto considera os princípios de proteção de dados pessoais previstos
na **Lei Geral de Proteção de Dados Pessoais (LGPD)**.

A versão atual ainda possui pontos de segurança que podem ser
aprimorados. Entre eles estão:

-   Utilização de **MD5** para armazenamento de senhas;
-   Consultas SQL que podem ser aprimoradas com o uso de **prepared
    statements** em diferentes partes do sistema.

Esses pontos devem ser considerados como melhorias futuras e não como
mecanismos de segurança recomendados para novos sistemas.

### Dados para publicação

O arquivo `perfumatch.sql` disponibilizado neste repositório foi
preparado para não publicar registros pessoais de usuários existentes na
versão original do projeto.

------------------------------------------------------------------------

# Status do projeto

**Concluído --- Trabalho de Conclusão de Curso (TCC), 2026.**

A plataforma foi desenvolvida como projeto de TCC e submetida a testes
internos de funcionamento e usabilidade, além de uma consulta
exploratória realizada durante uma exposição escolar.

Como melhorias futuras, estão previstas a correção de problemas
identificados, o aperfeiçoamento da segurança, a ampliação do catálogo,
o aprimoramento do sistema de recomendação e a realização de novos
testes com grupos maiores e mais diversificados.

------------------------------------------------------------------------

# Repositório

O código-fonte do projeto está disponível em:

https://github.com/RafaRB02D2/Perfumatch-TCC

------------------------------------------------------------------------

# Termos de Uso e Compartilhamento

**Autores:** Murillo Falcão Martins, Mateus Rezende Camargo, Raul Abreu
da Silva, Rafael Royer Bueno\
**Orientador:** Prof. Mateus Amendola Redivo\
**Projeto:** Perfumatch --- Sistema de recomendação de perfumes, TCC
Técnico de Informática, Colégio Técnico Bento Quirino, 2026

© 2026 Murillo Falcão Martins, Mateus Rezende Camargo, Raul Abreu da
Silva, Rafael Royer Bueno. Todos os direitos reservados, exceto o que
está expressamente permitido abaixo.

## Permitido

-   Consultar e estudar o código para fins educacionais;
-   Uso para avaliação do TCC e apresentação acadêmica;
-   Uso não comercial por terceiros, desde que respeitadas as condições
    de crédito abaixo.

## Condições

1.  **Crédito obrigatório:** qualquer uso, cópia, adaptação ou
    divulgação deve citar os autores pelo nome e incluir link para este
    repositório.
2.  **Sem fins lucrativos:** é proibido usar, vender, licenciar ou
    oferecer este código (ou derivados) como produto ou serviço
    comercial sem autorização dos autores.
3.  **Uso institucional:** o uso pela instituição de ensino além da
    avaliação do TCC depende de autorização prévia e por escrito dos
    autores.
4.  **Derivados:** trabalhos derivados devem manter este aviso e indicar
    o que foi alterado.

## Compartilhamento

O compartilhamento do projeto é permitido para fins educacionais e
acadêmicos, desde que sejam mantidos os créditos dos autores e o link
para o repositório oficial.

Não é permitida a utilização comercial do código ou de versões derivadas
sem autorização prévia dos autores.

## Contato

Para solicitar autorização ou entrar em contato com os autores:

-   **Murillo Falcão Martins:** murillofalcaoinfo@gmail.com --- GitHub:
    https://github.com/mucanas
-   **Mateus Rezende Camargo:** mateusrzcamargo@gmail.com --- GitHub:
    https://github.com/mateusrezende07 --- LinkedIn:
    https://linkedin.com/in/mateus-rezende-4b2467353
-   **Raul Abreu da Silva:** Raulsonic2009@gmail.com --- GitHub:
    https://github.com/raul-silva2009
-   **Rafael Royer Bueno:** royerbuenorafael@gmail.com --- GitHub:
    https://github.com/RafaRB02D2 --- LinkedIn:
    https://www.linkedin.com/in/rafael-rb-925aa9274/

## Isenção de garantia

O software é fornecido "como está", sem garantias de qualquer tipo.
