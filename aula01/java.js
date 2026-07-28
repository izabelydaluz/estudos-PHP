// console.log("teste");

// let x=5;
// let y=2;
// let z= x+y;

// console.log(z);

// let elemento = document.getElementById("texto_principal");

// elemento.style.backgroundColor = "red";
// elemento.style.fontSize = "20px";

// let idade = 17;

// if(idade >= 18){
//     console.log("ja pode beber");
// }else{
//     console.log("não pode ainda");
// }

// let nota = 5;

// if (nota >= 6){
//     console.log("aprovado");
// }else if (nota >= 3){
//     console.log("recuperação");
// }else{
//     console.log("reprovado");
// }

// let clima = "sol";
// let tempo = 30;

// if (tempo >= 27 && clima =="sol"){
//     console.log("ir pra praia");
// }else{
//     console.log("ficar em casa");
// }

// let estudante = true;
// let idade = 17;

// if (estudante == true || idade >= 60){
//     console.log("tem direito a meia entrada");
// }else{
//     console.log("não tem direito a meia entrada");
// }


// let dia_semana = "segunda";
// console.log("hj a aula é de : ");

// switch(dia_semana){
//     case "segunda":
//         console.log("programação");
//         break;
//     case "terça":
//         console.log("banco de dados");
//         break;
//     case "quarta":
//         console.log("back end");
//         break;

//     default:
//         console.log("dia invalida");
// } 

// let frutas = ["maça","laranja","abacate","banana"];
// console.log(frutas[0]);

// frutas.push("melancia"); //adiciona coisas
// console.log(frutas.length); //conta quantos tem

// for (let i = 0; i<5 ;i++){
//     console.log("isso roda 5 vezes a vez atual é: "+i);
// }

// for (let i = 0; i < frutas.length ;i++){
//     console.log("a fruta atual é: "+frutas[i]);
// }

function boa_tarde(){
    console.log("boa tarde");
}
boa_tarde();

// function soma(valor1,valor2){
//     let resultado = valor1+ valor2;
//     console.log(resultado);
// }
// soma(5,6);

// function soma(valor1,valor2){
//     let resultado = valor1+ valor2;
//     return resultado;
// }

// let resultado_soma = soma(6,5);
// console.log(resultado_soma);

function big(id){
    elemento = document.getElementById(id);
    elemento.style.height = "50px" ;
}