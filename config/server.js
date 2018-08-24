//Requering packages
var express = require('express');
var consign = require('consign');

//Inicializando
var app = express();

//Autoload de rotas
consign().include('app/routes').then('app/models').then('config/db.js').into(app);

//Set to EJS
app.set('view engine', 'ejs');
app.set('views', './app/views');

//Exports
module.exports = app;