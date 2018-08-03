//require() = modulo Node.js
var http = require('http');

//Create server
var server = http.createServer(function(request, response){

  var category = request.url;

  if(category == "/Fiap") {
    response.end("<html><head></head><body><h1>Hello Fiap</h1></body></html>");
  }else if(category == "/Comida") {
    response.end("<html><head></head><body><h1>Comidaaaa</h1></body></html>");
  }

  response.end("<html><head></head><body><h1>Hello Word!</h1></body></html>");
});

server.listen(2000);