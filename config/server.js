var express = require('express');
var consign = require('consign');

//Inicializando a function
var app = express();

//Autoload das rotas
//.then('config/db') => Autoload do DB, tem que ter extensao
consign().include('app/routes').then('app/models').then('config/db.js').into(app);

//A Engine de view foi altera para EJS. Para configurar isso no Node:
app.set('view engine', 'ejs');
app.set('views', './app/views');

//Exports
module.exports = app;