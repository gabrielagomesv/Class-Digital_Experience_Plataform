module.exports = function(app) {
  var mysql = require('mysql');

  app.get('/create_produtos', function(request, response){
    //response.render('admin/create_produtos');
    
    var connection = mysql.createConnection(
      {
        host: localhost,
        user: root,
        password: 'labfiap$2018',
        database: 'sistema_produtos'
      }
    );
  
    connection.query('SELECT * FROM produto', function(error, result){
      response.send(result);
    });
  });
}