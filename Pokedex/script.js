

var nome = document.getElementById("nome");
var numero = document.getElementById("numero");
var tipo = document.getElementById("tipo");
var desc = document.getElementById("desc");
var sprite = document.getElementById("sprite");

var buscar = document.getElementById("buscar");

function buscarPokemon(){

    var pokemon = document.getElementById("buscar_nome").value;
    pokemon = pokemon.toLowerCase();
    

    fetch("https://pokeapi.co/api/v2/pokemon/" + pokemon)
    .then(function(resposta){

        if (!resposta.ok){
            throw new Error("pokemin não encontrado");
        }
        return resposta.json()
    })
    .then(function(dados){

        nome.innerHTML = dados.name;
        tipo.innerHTML = "tipo:" + dados.types[0].type.name;
        numero.innerHTML = "N°:" + dados.id;
        sprite.src = dados.sprites.front_default;
        buscarDescricao(pokemon);
    })

    function buscarDescricao(pokemon){
         fetch("https://pokeapi.co/api/v2/pokemon-species/" + pokemon)
         .then(function(resposta){
        return resposta.json()
    })
    .then(function(dados){

        desc.innerHTML = dados.flavor_text_entries[0].flavor_text;
    })

    }
}