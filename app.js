//Exporting server configs
var app = require('./config/server');

//Require routes
var homeRoutes = require('./app/routes/home');
homeRoutes(app);

var produtosRoutes = require('./app/routes/produtos')(app);

var sportsRoutes = require('./app/routes/sports')(app);

var create_produtos = require('./app/routes/create_produtos')(app);

//Sobe o servidor utilizando o listen(), passando a porta e uma function de callback
app.listen(2000, function() {
  //console.log("Server is up with Express");
  console.log("Server ativo");
});


