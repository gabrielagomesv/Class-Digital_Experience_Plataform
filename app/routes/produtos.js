module.exports = function(app) {

  app.get('/produtos', function(request, response){

    var connection = app.config.db();

    connection.query(
      'SELECT * FROM produto',

      function(error, result) {
        response.render("produtos/produtos", { produtos: result });
        console.log(error);
      }
    );
  });
}
