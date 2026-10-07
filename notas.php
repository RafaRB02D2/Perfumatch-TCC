<?php 
 
require_once("includes/conexao.php"); 
 
?> 
 
<!DOCTYPE html> 
 
<html lang="pt-br"> 
 
<head> 
 
<meta charset="UTF-8"> 
 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
<title>Notas Olfativas - PerfumeMatch</title> 
 
<link rel="stylesheet" href="includes/style.css"> 
 
<style> 
 
.notas-container{ 
 
    width: 90%; 
 
    max-width: 1400px; 
 
    margin: 0 auto; 
 
    padding-top: 120px; 
 
    padding-bottom: 60px; 
 
} 
 
.notas-titulo{ 
 
    text-align: center; 
 
    margin-bottom: 15px; 
 
} 
 
.notas-titulo h1{ 
 
    color: #00bfff; 
 
    font-size: 38px; 
 
    margin-bottom: 10px; 
 
} 
 
.notas-titulo p{ 
 
    color: #aabbcc; 
 
    font-size: 16px; 
 
    line-height: 1.6; 
 
    max-width: 750px; 
 
    margin: auto; 
 
} 
 
.notas-linha{ 
 
    width: 90px; 
 
    height: 3px; 
 
    background: #00bfff; 
 
    margin: 25px auto 30px; 
 
    border-radius: 10px; 
 
} 
 
.pesquisa-notas{ 
 
    width: 100%; 
 
    max-width: 650px; 
 
    margin: 0 auto 45px; 
 
} 
 
.pesquisa-notas input{ 
 
    width: 100%; 
 
    height: 52px; 
 
    box-sizing: border-box; 
 
    background: #021c34; 
 
    border: 1px solid #043a63; 
 
    border-radius: 10px; 
 
    padding: 0 20px; 
 
    color: #ffffff; 
 
    font-size: 16px; 
 
    outline: none; 
 
} 
 
/* GRID DOS BOTÕES */ 
 
.grid-notas{ 
 
    display: grid; 
 
    grid-template-columns: repeat(4, 1fr); 
 
    gap: 22px; 
 
} 
 
/* BOTÃO / BOX DE CADA NOTA */ 
 
.botao-nota{ 
 
    display: flex; 
 
    align-items: center; 
 
    justify-content: center; 
 
    min-height: 90px; 
 
    background: #021c34; 
 
    border: 1px solid #043a63; 
 
    border-radius: 12px; 
 
    color: #ffffff; 
 
    text-decoration: none; 
 
    font-size: 19px; 
 
    font-weight: bold; 
 
    transition: .3s; 
 
} 
 
.botao-nota:hover{ 
 
    transform: translateY(-6px); 
 
    border-color: #00bfff; 
 
    box-shadow: 0 8px 25px rgba(0,191,255,.16); 
 
    color: #00bfff; 
 
} 
 
@media(max-width:1000px){ 
 
    .grid-notas{ 
 
        grid-template-columns: repeat(3,1fr); 
 
    } 
 
} 
 
@media(max-width:750px){ 
 
    .grid-notas{ 
 
        grid-template-columns: repeat(2,1fr); 
 
    } 
 
} 
 
@media(max-width:500px){ 
 
    .grid-notas{ 
 
        grid-template-columns: 1fr; 
 
    } 
 
} 
 
</style> 
 
</head> 
 
<body> 
 
<?php require_once("includes/header.php"); ?> 
 
 
<div class="notas-container"> 
 
 
    <div class="notas-titulo"> 
 
        <h1>Notas Olfativas</h1> 
 
        <p> 
            Descubra as principais notas utilizadas na perfumaria. 
        </p> 
 
        <div class="notas-linha"></div> 
 
    </div> 
 
 
    <div class="pesquisa-notas"> 
 
        <input 
            type="text" 
            id="pesquisaNota" 
            placeholder="Pesquisar nota olfativa..." 
            autocomplete="off" 
        > 
 
    </div> 
 
 
    <div class="grid-notas" id="gridNotas"> 
 
 
        <!-- MORANGO --> 
 
        <a 
            href="notas/morango.php" 
            class="botao-nota" 
        > 
            Morango 
        </a> 
 
 
        <!-- ROSA --> 
 
        <a 
            href="notas/rosa.php" 
            class="botao-nota" 
        > 
            Rosa 
        </a> 
 
 
        <!-- BAUNILHA --> 
 
        <a 
            href="notas/baunilha.php" 
            class="botao-nota" 
        > 
            Baunilha 
        </a> 
 
 
        <!-- JASMIM --> 
 
        <a 
            href="notas/jasmim.php" 
            class="botao-nota" 
        > 
            Jasmim 
        </a> 
 
 
        <!-- LAVANDA --> 
 
        <a 
            href="notas/lavanda.php" 
            class="botao-nota" 
        > 
            Lavanda 
        </a> 
 
 
        <!-- LIMÃO --> 
 
        <a 
            href="notas/limao.php" 
            class="botao-nota" 
        > 
            Limão 
        </a> 
 
 
        <!-- LARANJA --> 
 
        <a 
            href="notas/laranja.php" 
            class="botao-nota" 
        > 
            Laranja 
        </a> 
 
 
        <!-- BERGAMOTA --> 
 
        <a 
            href="notas/bergamota.php" 
            class="botao-nota" 
        > 
            Bergamota 
        </a> 
 
 
        <!-- TORANJA --> 
 
        <a 
            href="notas/toranja.php" 
            class="botao-nota" 
        > 
            Toranja 
        </a> 
 
 
        <!-- CEDRO --> 
 
        <a 
            href="notas/cedro.php" 
            class="botao-nota" 
        > 
            Cedro 
        </a> 
 
 
        <!-- SÂNDALO --> 
 
        <a 
            href="notas/sandalo.php" 
            class="botao-nota" 
        > 
            Sândalo 
        </a> 
 
 
        <!-- ALMÍSCAR --> 
 
        <a 
            href="notas/almiscar.php" 
            class="botao-nota" 
        > 
            Almíscar 
        </a> 
 
 
        <!-- ÂMBAR --> 
 
        <a 
            href="notas/ambar.php" 
            class="botao-nota" 
        > 
            Âmbar 
        </a> 
 
 
        <!-- CANELA --> 
 
        <a 
            href="notas/canela.php" 
            class="botao-nota" 
        > 
            Canela 
        </a> 
 
 
        <!-- COCO --> 
 
        <a 
            href="notas/coco.php" 
            class="botao-nota" 
        > 
            Coco 
        </a> 
 
 
        <!-- CAFÉ --> 
 
        <a 
            href="notas/cafe.php" 
            class="botao-nota" 
        > 
            Café 
        </a> 
 
 
        <!-- CHOCOLATE --> 
 
        <a 
            href="notas/chocolate.php" 
            class="botao-nota" 
        > 
            Chocolate 
        </a> 
 
 
        <!-- MEL --> 
 
        <a 
            href="notas/mel.php" 
            class="botao-nota" 
        > 
            Mel 
        </a> 
 
 
        <!-- MAÇÃ --> 
 
        <a 
            href="notas/maca.php" 
            class="botao-nota" 
        > 
            Maçã 
        </a> 
 
 
        <!-- PÊSSEGO --> 
 
        <a 
            href="notas/pessego.php" 
            class="botao-nota" 
        > 
            Pêssego 
        </a> 
 
        
      
 
        <a 
            href="notas/abacaxi.php" 
            class="botao-nota" 
        > 
            Abacaxi 
        </a> 
 
 
 
        <a 
            href="notas/abeto.php" 
            class="botao-nota" 
        > 
            Abeto
        </a> 
 
 
     
 
        <a 
            href="notas/absinto.php" 
            class="botao-nota" 
        > 
            Absinto 
        </a> 
 
 
 
        <a 
            href="notas/acafrao.php" 
            class="botao-nota" 
        > 
           Açafrão
        </a> 
 
 
        
 
        <a 
            href="notas/acucar.php" 
            class="botao-nota" 
        > 
           Açucar
        </a> 
 
 
      
 
        <a 
            href="notas/agathosma.php" 
            class="botao-nota" 
        > 
           Agathosma
        </a> 
 
 
       
 
        <a 
            href="notas/agua.php" 
            class="botao-nota" 
        > 
           Agua
        </a> 
 
 
      
        <a 
            href="notas/alcacuz.php" 
            class="botao-nota" 
        > 
            Alcaçuz
        </a> 
 
 
     
 
        <a 
            href="notas/aldeidos.php" 
            class="botao-nota" 
        > 
           Aldeideos
        </a> 
 
 
      
 
        <a 
            href="notas/alecrim.php" 
            class="botao-nota" 
        > 
            Alecrim
        </a> 
 
 
       
 
        <a 
            href="notas/algas.php" 
            class="botao-nota" 
        > 
           Algas
        </a> 
 
 
       
 
        <a 
            href="notas/ambarcinzento.php" 
            class="botao-nota" 
        > 
           Âmbar Cinzento
        </a> 
 
 
       
 
        <a 
            href="notas/ambreta.php" 
            class="botao-nota" 
        > 
            ambreta
        </a> 
 
 
        
 
        <a 
            href="notas/ambroxan.php" 
            class="botao-nota" 
        > 
            Ambroxan
        </a> 
 
 
       
 
        <a 
            href="notas/ameixa.php" 
            class="botao-nota" 
        > 
            Ameixa
        </a> 
 
 
        
 
        <a 
            href="notas/amendoa.php" 
            class="botao-nota" 
        > 
            Amendoa
        </a> 
 
 
        <!-- CHOCOLATE --> 
 
        <a 
            href="notas/angelica.php" 
            class="botao-nota" 
        > 
            angelica
        </a> 
 
 
     
 
        <a 
            href="notas/anis.php" 
            class="botao-nota" 
        > 
            Anis
        </a> 
 
 
      
 
        <a 
            href="notas/artemisia.php" 
            class="botao-nota" 
        > 
          Artemisia
        </a> 
 
 
        
 
        <a 
            href="notas/benjoim.php" 
            class="botao-nota" 
        > 
           Benjoim
        </a> 

          
        <a 
            href="notas/heliotropo.php" 
            class="botao-nota" 
        > 
            Heliotropo
        </a> 
 
 
       
 
        <a 
            href="notas/hibisco.php" 
            class="botao-nota" 
        > 
            Hibisco
        </a> 
 
 
        
 
        <a 
            href="notas/hortela.php" 
            class="botao-nota" 
        > 
           Hortelã
        </a> 
 
 
       
 
        <a 
            href="notas/incenso.php" 
            class="botao-nota" 
        > 
            Incenso
        </a> 
 
 
        
 
        <a 
            href="notas/iris.php" 
            class="botao-nota" 
        > 
            Iris
        </a> 
 
 
        
 
        <a 
            href="notas/isoesuper.php" 
            class="botao-nota" 
        > 
          Isoesuper
        </a> 
 
 
       
 
        <a 
            href="notas/jacinto.php" 
            class="botao-nota" 
        > 
            Jacinto
        </a> 
 
 
       
 
        <a 
            href="notas/junipero.php" 
            class="botao-nota" 
        > 
            Junipero
        </a> 
 
 
        
 
        <a 
            href="notas/ladano.php" 
            class="botao-nota" 
        > 
            Ladano
        </a> 
 
 
       
 
        <a 
            href="notas/laranjaamarga.php" 
            class="botao-nota" 
        > 
           Laranja Amarga
        </a> 
 
 
        
        <a 
            href="notas/leite.php" 
            class="botao-nota" 
        > 
          Leite
        </a> 
 
 
        
 
        <a 
            href="notas/lichia.php" 
            class="botao-nota" 
        > 
           Lichia
        </a> 
 
 
        
 
        <a 
            href="notas/lima.php" 
            class="botao-nota" 
        > 
           Lima
        </a> 
 
 
        
 
        <a 
            href="notas/lirio.php" 
            class="botao-nota" 
        > 
           Lirio
        </a> 
 
 
        
 
        <a 
            href="notas/lotus.php" 
            class="botao-nota" 
        > 
            Lotus
        </a> 
 
 
        
 
        <a 
            href="notas/louro.php" 
            class="botao-nota" 
        > 
            Louro
        </a> 
 
 
        
 
        <a 
            href="notas/madeiraambar.php" 
            class="botao-nota" 
        > 
            Madeira Âmbar
        </a> 
 
 
        
 
        <a 
            href="notas/magnolia.php" 
            class="botao-nota" 
        > 
           Magnolia
        </a> 
 
 
        
 
        <a 
            href="notas/mahonial.php" 
            class="botao-nota" 
        > 
           Mahonial
        </a> 
 
 
        
 
        <a 
            href="notas/maltol.php" 
            class="botao-nota" 
        > 
            Maltol

        </a> 
 
        
      
 
        <a 
            href="notas/mamao.php" 
            class="botao-nota" 
        > 
            Mamão
        </a> 
 
 
 
        <a 
            href="notas/mandarina.php" 
            class="botao-nota" 
        > 
           Mandarina
        </a> 
 
 
     
 
        <a 
            href="notas/mandarinasanguinia.php" 
            class="botao-nota" 
        > 
           Mandarina Sanguinia
        </a> 
 
 
 
        <a 
            href="notas/manga.php" 
            class="botao-nota" 
        > 
           Manga
        </a> 
 
 
      
 
        <a 
            href="notas/manjericao.php" 
            class="botao-nota" 
        > 
           manjericao
        </a> 
 
 
       
 
        <a 
            href="notas/maracuja.php" 
            class="botao-nota" 
        > 
          Maracuja
        </a> 
 
 
      
        <a 
            href="notas/mate.php" 
            class="botao-nota" 
        > 
            Mate
        </a> 
 
 
     
 
        <a 
            href="notas/melancia.php" 
            class="botao-nota" 
        > 
           Melancia
        </a> 
 
 
      
 
        <a 
            href="notas/melao.php" 
            class="botao-nota" 
        > 
            Melão
        </a> 
 
 
       
 
        <a 
            href="notas/mirra.php" 
            class="botao-nota" 
        > 
          Mirra
        </a> 
 
 
       
 
        <a 
            href="notas/muguet.php" 
            class="botao-nota" 
        > 
          Muguet
        </a> 
 
 
       
 
        <a 
            href="notas/musgodecarvalho.php" 
            class="botao-nota" 
        > 
            Musgo De Carvalho
        </a> 
 
 
        
 
        <a 
            href="notas/neroli.php" 
            class="botao-nota" 
        > 
            Neroli
        </a> 
 
 
       
 
        <a 
            href="notas/notasamadeiradas.php" 
            class="botao-nota" 
        > 
            Notas Amadeiradas
        </a> 
 
 
        
 
        <a 
            href="notas/notasaromaticas.php" 
            class="botao-nota" 
        > 
            Notas Aromaticas
        </a> 
 
 
        
 
        <a 
            href="notas/notasminerais.php" 
            class="botao-nota" 
        > 
            Notas Minerais
        </a> 
 
 
     
 
        <a 
            href="notas/notasoceanicas.php" 
            class="botao-nota" 
        > 
            Notas Oceanicas 
        </a> 
 
 
      
 
        <a 
            href="notas/notasterrosas.php" 
            class="botao-nota" 
        > 
         Notas Terrosas
        </a> 
 
 
        
 
        <a 
            href="notas/notasverdes.php" 
            class="botao-nota" 
        > 
           Notas Verdes 
        </a> 
 
         
        <a 
            href="notas/nozmoscada.php" 
            class="botao-nota" 
        > 
            Noz Moscada
        </a> 
 
 
        
 
        <a 
            href="notas/olibano.php" 
            class="botao-nota" 
        > 
            Olibano
        </a> 
 
 
       
 
        <a 
            href="notas/opoponax.php" 
            class="botao-nota" 
        > 
            Oponax 
        </a> 
 
 
        
 
        <a 
            href="notas/oregano.php" 
            class="botao-nota" 
        > 
           Oregano
        </a> 
 
 
        
 
        <a 
            href="notas/Orquidea.php" 
            class="botao-nota" 
        > 
           Orquidea
        </a> 
 
 
       
 
        <a 
            href="notas/osmanto.php" 
            class="botao-nota" 
        > 
           Osmanto
        </a> 
 
 
       
 
        <a 
            href="notas/oud.php" 
            class="botao-nota" 
        > 
            Oud
        </a> 
 
 
        
 
        <a 
            href="notas/ouro.php" 
            class="botao-nota" 
        > 
            Ouro
        </a> 
 
 
       
 
        <a 
            href="notas/patchouli.php" 
            class="botao-nota" 
        > 
           Patchouli
        </a> 
 
 
        
 
        <a 
            href="notas/peonia.php" 
            class="botao-nota" 
        > 
            Peonia
        </a> 
 
 
         
 
        <a 
            href="notas/pepino.php" 
            class="botao-nota" 
        > 
          Pepino
        </a> 
 
 
        
 
        <a 
            href="notas/pera.php" 
            class="botao-nota" 
        > 
            Pera
        </a> 
 
 
       
 
        <a 
            href="notas/petalia.php" 
            class="botao-nota" 
        > 
            Petalia
        </a> 
 
 
      
 
        <a 
            href="notas/petitgrain.php" 
            class="botao-nota" 
        > 
            Petitgrain
        </a> 
 
 
        
 
        <a 
            href="notas/pimenta.php" 
            class="botao-nota" 
        > 
           Pimenta
        </a> 
 
 
      
 
        <a 
            href="notas/pimentapreta.php" 
            class="botao-nota" 
        > 
           Pimenta Preta
        </a> 
 
 
        
 
        <a 
            href="notas/pimentarosa.php" 
            class="botao-nota" 
        > 
            Pimenta Rosa
        </a> 
 
 
        
 
        <a 
            href="notas/pinheiro.php" 
            class="botao-nota" 
        > 
            Pinheiro
        </a> 
 
 
        
 
        <a 
            href="notas/pitaya.php" 
            class="botao-nota" 
        > 
           Pitaya
        </a> 
 
 
       
 
        <a 
            href="notas/praline.php" 
            class="botao-nota" 
        > 
            Praline
        </a> 
 
        
      
 
        <a 
            href="notas/quinca.php" 
            class="botao-nota" 
        > 
            Quinca
        </a> 
 
 
 
        <a 
            href="notas/raizdeorris.php" 
            class="botao-nota" 
        > 
            Raiz De Orris
        </a> 
 
 
     
 
        <a 
            href="notas/ruibarbo.php" 
            class="botao-nota" 
        > 
            Ruibarbo
        </a> 
 
 
 
        <a 
            href="notas/rum.php" 
            class="botao-nota" 
        > 
           Rum
        </a> 
 
 
        
 
        <a 
            href="notas/sal.php" 
            class="botao-nota" 
        > 
           Sal
        </a> 
 
 
      
 
        <a 
            href="notas/salvia.php" 
            class="botao-nota" 
        > 
           Salvia
        </a> 
 
 
       
 
        <a 
            href="notas/sapoti.php" 
            class="botao-nota" 
        > 
           Sapoti
        </a> 
 
 
      
        <a 
            href="notas/tabaco.php" 
            class="botao-nota" 
        > 
            Tabaco
        </a> 
 
 
     
 
        <a 
            href="notas/tamara.php" 
            class="botao-nota" 
        > 
           Tamara
        </a> 
 
 
      
 
        <a 
            href="notas/tangerina.php" 
            class="botao-nota" 
        > 
            Tangerina
        </a> 
 
 
       
 
        <a 
            href="notas/toffee.php" 
            class="botao-nota" 
        > 
           Toffee
        </a> 
 
 
       
 
        <a 
            href="notas/tomilho.php" 
            class="botao-nota" 
        > 
           Tomilho
        </a> 
 
 
       
 
        <a 
            href="notas/tuberosa.php" 
            class="botao-nota" 
        > 
            Tuberosa
        </a> 
 
 
        
 
        <a 
            href="notas/uva.php" 
            class="botao-nota" 
        > 
            Uva
        </a> 
 
 
       
 
        <a 
            href="notas/vetiver.php" 
            class="botao-nota" 
        > 
           Vetiver
        </a> 
 
 
        
 
        <a 
            href="notas/vinho.php" 
            class="botao-nota" 
        > 
            Vinho
        </a> 
 
 
        
 
        <a 
            href="notas/violeta.php" 
            class="botao-nota" 
        > 
            Violeta
        </a> 
 
 
     
 
        <a 
            href="notas/whisky.php" 
            class="botao-nota" 
        > 
            Whisky
        </a> 
 
 
      
 
        <a 
            href="notas/x.php" 
            class="botao-nota" 
        > 
          X
        </a> 
 
 
        
 
        <a 
            href="notas/ylangylang.php" 
            class="botao-nota" 
        > 
           Ylang-Ylang
        </a> 

          
        <a 
            href="notas/yuzu.php" 
            class="botao-nota" 
        > 
            Yuzu
        </a> 
 
 
       
 
        <a 
            href="notas/zimbro.php" 
            class="botao-nota" 
        > 
            Zimbro
        </a> 
 
 
        
 
      
 
 
    </div> 
 
 
</div> 
 
 
<script> 
 
function normalizarTexto(texto){ 
 
    return texto 
        .normalize("NFD") 
        .replace(/[\u0300-\u036f]/g,"") 
        .toLowerCase() 
        .trim(); 
 
} 
 
 
const pesquisa = 
    document.getElementById("pesquisaNota"); 
 
const botoes = 
    document.querySelectorAll(".botao-nota"); 
 
 
pesquisa.addEventListener("input", function(){ 
 
    const texto = 
        normalizarTexto(this.value); 
 
 
    botoes.forEach(function(botao){ 
 
        const nome = 
            normalizarTexto( 
                botao.textContent 
            ); 
 
 
        if(nome.includes(texto)){ 
 
            botao.style.display = "flex"; 
 
        }else{ 
 
            botao.style.display = "none"; 
 
        } 
 
    }); 
 
}); 
 
</script> 
 
 
</body> 
 
</html>
