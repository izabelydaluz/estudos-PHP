var botaoBuscar = document.getElementById("buscar");
var botaoInserir = document.getElementById("salvar");

function mostrar_produtos(){
fetch("../Api/produtos.php")
    .then(function(resposta){
            return resposta.json();
    })

    .then(function(produtos){

        var html = "";

        produtos.forEach(function(produto){

            html += "<tr>";
            html += "<td>"+ produto.id+"</td>";
            html += "<td>"+ produto.nome+"</td>";
            html += "<td>"+ produto.preco+"</td>";
            html += "</tr>";


        });

        document.getElementById("resultado").innerHTML = document.getElementById("resultado").innerHTML + html;

    });
    
}

function inserirProduto(){
    var nome = document.getElementById("nome").value;
    var preco = document.getElementById("preco").value;

    
    fetch("../api/inserir.php",{
        method: "POST",
        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:"nome="+nome+"&preco="+preco
    })

    .then(function(resposta){
        return resposta.text();
    })

    .then(function(retorno){
        if(retorno=="ok"){
            alert("produto cadastrado");
            document.getElementById("nome").value="";
            document.getElementById("preco").value="";
        }else{
            alert("erro ao cadastrar");
        }
    });
}


botaoBuscar.onclick = function(){
    mostrar_produtos();
}

botaoInserir.onclick = function(){
    inserirProduto();
}