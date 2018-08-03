var express = require('express');

//Incorpora o módulo
var msg = require('./test_module');

//Inicializando a function
var app = express();

//A Engine de view foi altera para EJS. Para configurar isso no Node:
app.set('view engine', 'ejs');

//CHALLENGE
app.get('/create_produtos', function(request, response){
  response.render('admin/create_produtos');
});

app.get('/index', function(request, response){
  response.render('home/index');
});

app.get('/produtos', function(request, response){
  response.render('produtos/produtos');
});

//EXEMPLO COM EJS
app.get('/sports', function(request, response){
  response.render('section/sports');
});
//
// <--------------------------------------------------------------->
//

//Routes
// app.get('/', function(request, response) {
//   //funciona igual o listen()
//   response.send("<html><head></head><body><h1>Hello Word with Express!</h1></body></html>");
// });

// app.get('/surf', function(request, response) {
//   //funciona igual o listen()
//   response.send("<html><head></head><body><h1>Surf</h1></body></html>");
// });

// app.get('/tabuada', function(request, response) {

//     var result = '<center><h2>Tabuadas</h2>'

//     for (var x = 0; x <= 10; x++) {
//       result += '<hr>Tabuada do ' + x + '<br>';

//       for (var y = 0; y <= 10; y++) {
//         var saida = x + ' x ' + y + '=' + (x*y) + '<br>';
//         result += saida;
//       } 
//     }

//     result += '<hr>';
//     result += '</center>'
  
//   //funciona igual o listen()
//   response.send(result);

// });

//
// <--------------------------------------------------------------->
//

//Sobe o servidor utilizando o listen(), passando a porta e uma function de callback
app.listen(2000, function() {
  //console.log("Server is up with Express");
  console.log(msg());
});


