
// function pega_valor(){
//     let valor = document.getElementById("valor1");
//     console.log(valor.value);
// }

// function soma(){
//     let valor1 = document.getElementById("valor1");
//     let valor2 = document.getElementById("valor2");
//     let soma =parseInt(valor1.value)+parseInt(valor2.value);
//     console.log(soma);
// }
// function mostrar(){
//     let texto1 = document.getElementById("conteudo");
//     console.log(texto1.innerText);
    
    
// }

// function alterar(){
//     let texto2 = document.getElementById("titulo");
//     let valor1 = document.getElementById("valor1");
//     texto2.innerText=valor1.value;
    
// }

function soma(){
    let valor1 = document.getElementById("valor1");
    let valor2 = document.getElementById("valor2");
    let soma =parseInt(valor1.value)+parseInt(valor2.value);

    let texto2 = document.getElementById("resultado");
    texto2.innerText=soma;

}

function calculo_idade(){
    let idade = document.getElementById("valor1");
    let texto2 = document.getElementById("resultado");
    let num =parseInt(valor1.value);
    if(num > 18){
        texto2.innerText="ja pode dirijir";
    }else{
        texto2.innerText="somente carona";
    }
}

function faltar(){
    
    let temp = document.getElementById("valor1");
    let clima = document.getElementById("valor2");
    let texto2 = document.getElementById("resultado");

    let num1 =parseInt(valor1.value);

    if (num1 == 20 || clima =="chuva"){
        texto2.innerText="faltar";
    }else{
        texto2.innerText="ir para aula";
    }
}

let frutas = [];
function lista(){
    let v1 = document.getElementById("valor1");
    let v2 = document.getElementById("valor2");
    let texto2 = document.getElementById("resultado");
    frutas.push(v1.value , v2.value);
    texto2.innerText=(frutas);
    console.log(frutas);
}
function lista2(){
    let v1 = document.getElementById("valor1");
    let texto2 = document.getElementById("resultado");
    texto2.innerText=(frutas[v1.value]);
    
}

function percorer(){
    palavra = '';
    for (let i = 0; i < frutas.length ; i++){
        if(palavra.length < frutas[i].length){
            palavra = frutas[i];
            
            let texto2 = document.getElementById("resultado");
            texto2.innerText=(palavra);
            console.log(palavra);
        }
        
    }
}