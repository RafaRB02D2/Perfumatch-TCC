# Perfumatch

## Sistema de recomendação de perfumes

[![GitHub](https://img.shields.io/badge/GitHub-Repositório-black?logo=github)](https://github.com/mateusrezende07/perfumatchtcc)

---

## Integrantes

- Murillo Falcão Martins
- Mateus Rezende Camargo
- Raul Abreu da Silva
- Rafael Royer Bueno

## Curso

**Técnico de Informática**

## Turma

3°B

## Título do projeto

**Perfumatch — Sistema de recomendação de perfumes**

## Instituição

**Colégio Técnico Bento Quirino**

****************## Ano

**2026**

## Orientador

**Prof. Mateus Amendola Redivo**

---

## Sobre o projeto

A **Perfumatch** é uma plataforma web desenvolvida como Trabalho de Conclusão de Curso (TCC), com o objetivo de auxiliar os usuários na escolha de perfumes de acordo com suas preferências, estilo e necessidades.

A plataforma reúne informações sobre diferentes fragrâncias em um catálogo, apresentando características como notas olfativas, família olfativa, intensidade, preço, tipo de perfumaria e ocasiões de uso.

O sistema também conta com um **questionário de preferências**, utilizado para identificar características do perfil do usuário e gerar recomendações de perfumes compatíveis.

A proposta da Perfumatch é tornar o processo de escolha de uma fragrância mais **simples, intuitivo, prático e acessível**, principalmente para pessoas que possuem pouco conhecimento sobre perfumaria.

---

## Funcionalidades

### Usuário

- Cadastro de usuário;
- Login e autenticação;
- Pesquisa de perfumes por nome;
- Navegação pelo catálogo;
- Consulta detalhada dos perfumes;
- Consulta de notas olfativas;
- Visualização de perfumes por:
  - Tipo de perfumaria;
  - Gênero;
  - Ocasião de uso;
- Questionário de preferências;
- Sistema de recomendação de perfumes;
- Organização das recomendações por faixa de preço;
- Favoritar perfumes;
- Consulta dos perfumes favoritos;
- Avaliação de perfumes;
- Consulta do histórico de questionários e recomendações salvos;
- Exclusão de registros salvos;
- Alteração de senha;
- Encerramento da sessão.

### Administrador

- Cadastro de perfumes;
- Edição de perfumes;
- Remoção de perfumes;
- Gerenciamento das informações utilizadas no catálogo e no sistema de recomendação.

As funcionalidades de cadastro, catálogo, pesquisa, questionário, recomendações, favoritos e avaliações fazem parte dos requisitos funcionais definidos para a plataforma.

---

## Sistema de recomendação

A Perfumatch utiliza um **sistema de recomendação baseado em regras e filtros estruturados**.

O usuário responde ao questionário informando características como:

- Gênero;
- Família olfativa;
- Ocasião de uso;
- Intensidade.

A partir dessas informações, o sistema realiza filtros nos perfumes cadastrados, considerando também a opção **Unissex** quando aplicável.

Depois da aplicação dos filtros, os resultados são organizados em quatro faixas de preço:

- **R$ 1.000 ou mais**
- **R$ 700 a R$ 999**
- **R$ 400 a R$ 699**
- **Até R$ 399**

São apresentados até três perfumes por faixa de preço, permitindo que diferentes combinações de recomendações sejam exibidas.

O usuário autenticado também pode salvar a combinação de critérios e recomendações para consultá-la posteriormente em seu perfil.

---

## Tecnologias utilizadas

O projeto foi desenvolvido utilizando:

- **HTML** — estrutura das páginas;
- **CSS** — estilização e organização visual;
- **JavaScript** — interações e funcionalidades dinâmicas;
- **PHP** — processamento e backend;
- **XAMPP** — ambiente para execução do servidor local e banco de dados;
- **JFIF/JPEG, JPG, PNG, WebP e AVIF** — formatos utilizados nas imagens;
- **Canva** — criação de elementos visuais, como a logo;
- **Draw.io** — criação dos diagramas do projeto.



---

## Estrutura e funcionamento

A aplicação utiliza **PHP** no backend e um banco de dados executado através do **XAMPP**.

O sistema utiliza sessões PHP para identificar usuários autenticados e relacionar suas ações aos respectivos registros, como favoritos, questionários salvos e avaliações.

### Principais entidades

O modelo de dados da plataforma contempla entidades relacionadas a:

- Usuário;
- Questionário;
- Perfume;
- Favorito;
- Avaliação.

Essas entidades permitem armazenar as informações necessárias para o funcionamento do sistema e para a persistência dos dados dos usuários.

---

# Como executar

## Pré-requisitos

Para executar o projeto localmente, é necessário possuir:

- [XAMPP](https://www.apachefriends.org/)
- Navegador web;
- Os arquivos deste repositório;
- Banco de dados do projeto.

## Instalação

### 1. Clonar o repositório

```bash
git clone https://github.com/mateusrezende07/perfumatchtcc.git
```

Ou faça o download do projeto diretamente pelo GitHub.

### 2. Colocar o projeto no XAMPP

Copie a pasta do projeto para a pasta `htdocs` do XAMPP.

Exemplo:

```text
C:\xampp\htdocs\perfumatchtcc
```

### 3. Iniciar o XAMPP

Abra o **XAMPP Control Panel** e inicie:

- Apache
- MySQL

### 4. Configurar o banco de dados

 

> **Observação:** as informações específicas de importação, nome do banco de dados e arquivo SQL devem ser preenchidas conforme a configuração presente no repositório.

### 5. Acessar a plataforma

Após iniciar o Apache e o banco de dados, acesse pelo navegador:

```text
http://localhost/perfumatchtcc/
```

> Caso a pasta do projeto possua outro nome dentro do `htdocs`, substitua `perfumatchtcc` pelo nome correspondente.

---

# Como utilizar

## 1. Cadastro e login

Ao acessar a plataforma, o usuário pode realizar seu cadastro e posteriormente entrar utilizando suas credenciais.

## 2. Explorar o catálogo

O usuário pode navegar pelo catálogo e consultar perfumes organizados por diferentes categorias, como:

- Tipo de perfumaria;
- Gênero;
- Ocasião de uso.

Também é possível pesquisar diretamente por um perfume.

## 3. Consultar notas olfativas

A plataforma possui uma área específica para consulta das notas olfativas.

O usuário pode visualizar diferentes notas e acessar informações específicas sobre cada uma delas.

## 4. Receber recomendações

O usuário pode responder ao questionário de preferências.

Após o envio, o sistema analisa as respostas e apresenta perfumes considerados compatíveis com o perfil informado.

## 5. Favoritar perfumes

Usuários autenticados podem favoritar perfumes e consultar posteriormente seus favoritos através da área de perfil.

## 6. Avaliar perfumes

O usuário pode atribuir uma avaliação aos perfumes utilizando uma escala de **1 a 5**.

As avaliações são utilizadas para apresentar a média e a quantidade de avaliações associadas ao perfume.

## 7. Consultar o perfil

Na área de usuário é possível:

- Consultar dados cadastrais;
- Visualizar questionários e recomendações salvos;
- Excluir registros salvos;
- Consultar favoritos;
- Remover favoritos;
- Alterar a senha;
- Encerrar a sessão.



---

# Público-alvo

A Perfumatch possui dois principais perfis de público:

### Leigos

Pessoas que possuem pouco conhecimento sobre perfumes e desejam compreender melhor o universo da perfumaria e encontrar fragrâncias compatíveis com suas preferências.

### Consumidores regulares

Pessoas que já possuem familiaridade com perfumes e desejam utilizar recursos mais específicos e informativos da plataforma, como a consulta de notas olfativas.



---

# Proteção de dados e segurança

A Perfumatch possui funcionalidades de cadastro, autenticação e armazenamento de informações relacionadas aos usuários. Por isso, o projeto considera os princípios de proteção de dados pessoais previstos na **Lei Geral de Proteção de Dados Pessoais (LGPD)**.

A versão documentada do projeto possui pontos de segurança que ainda podem ser aprimorados, incluindo a utilização de MD5 para armazenamento de senhas e consultas SQL que devem ser substituídas por prepared statements. Essas questões estão registradas na documentação do TCC como pontos de melhoria.

---

# Status do projeto

**Concluído — Trabalho de Conclusão de Curso (TCC), 2026.**

A plataforma foi desenvolvida e submetida a testes internos de funcionamento e usabilidade, além de uma consulta exploratória realizada durante uma exposição escolar.

Como melhorias futuras, estão previstas a correção de problemas identificados, ampliação do catálogo, aperfeiçoamento do sistema de recomendação e realização de novos testes com grupos maiores e mais diversificados.

---

# Repositório

O código-fonte do projeto está disponível em:

https://github.com/mateusrezende07/perfumatchtcc

---

# Termos de Uso e Compartilhamento

**Autores:** Murillo Falcão Martins, Mateus Rezende Camargo, Raul Abreu da Silva, Rafael Royer Bueno  
**Orientador(a):** Prof. Mateus Amendola Redivo  
**Projeto:** Perfumatch — Sistema de recomendação de perfumes, TCC Técnico de Informática, Colégio Técnico Bento Quirino, 2026

© 2026 Murillo Falcão martins, Mateus Rezende Camargo, Raul Abreu da Silva, Rafael Royer Bueno. Todos os direitos reservados,  
exceto o que está expressamente permitido abaixo.

### Permitido

- Consultar e estudar o código para fins educacionais.
- Uso para avaliação do TCC e apresentação acadêmica.
- Uso não comercial por terceiros, desde que respeitadas as condições de crédito abaixo.

### Condições

1. **Crédito obrigatório:** qualquer uso, cópia, adaptação ou divulgação deve citar os autores pelo nome e incluir link para este repositório.
2. **Sem fins lucrativos:** é proibido usar, vender, licenciar ou oferecer este código (ou derivados) como produto ou serviço comercial sem contratar os autores previamente.
3. **Uso institucional:** o uso pela instituição de ensino além da avaliação do TCC (outros projetos, sistemas internos, divulgação) depende de autorização prévia e por escrito dos autores.
4. **Derivados:** trabalhos derivados devem manter este aviso e indicar o que foi alterado.

### Compartilhamento

O compartilhamento do projeto é permitido para fins educacionais e acadêmicos, desde que sejam mantidos os créditos dos autores e o link para o repositório oficial.

Não é permitida a utilização comercial do código ou de versões derivadas sem autorização prévia dos autores.

### Contato

Para solicitar autorização ou contratar os autores:

- Murillo Falcão Martins: E-mail:murillofalcaoinfo@gmail.com; GitHub: GitHub.com/mucanas
- Mateus Rezende Camargo: Linkedin: linkedin.com/in/mateus-rezende-4b2467353; E-mail: Mateusrzcamargo@gmail.com; GitHub: https://github.com/mateusrezende07
- Raul Abreu da Silva: E-mail: Raulsonic2009@gmail.com; GitHub: github.com/raul-silva2009
- Rafael Royer Bueno: Linkedin: https://www.linkedin.com/in/rafael-rb-925aa9274/; E-mail: royerbuenorafael@gmail.com; GitHub: https://github.com/RafaRB02D2

### Isenção de garantia

O software é fornecido "como está", sem garantias de qualquer tipo.
