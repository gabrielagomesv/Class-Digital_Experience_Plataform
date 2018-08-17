var express = require('express');

//Inicializando a function
var app = express();

//A Engine de view foi altera para EJS. Para configurar isso no Node:
app.set('view engine', 'ejs');
app.set('views', './app/views');

//Exports
module.exports = app;