//Devem separ de 1 a 100 os números pares e impares
/*
for (let i = 0; i < 101; i++) {
  if ( i % 2 == 0){
    console.log( i + " é par");
  }else{
    console.log( i + " impar");
  }
}
*/

//Versão do Rafa
for (let i = 0; i < 101; i++) {
  let a = i % 2;
  a == 0 ? console.log( i + " é par") : console.log( i + " é ímpar");
}