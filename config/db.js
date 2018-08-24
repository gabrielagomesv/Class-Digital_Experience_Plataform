var mysql = require('mysql');

var mysql_connection = function() {
  console.log("Database connection established");

  return connection = mysql.createConnection(
    {
      host: 'Localhost',
      user: 'root',
      password: 'c714hj2nkq',
      database: 'departamento_transito'
    }
  );
}

module.exports = function() {
  console.log(":::: Autoload successfully load connection module! ::::");
  return mysql_connection;
}