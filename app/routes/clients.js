module.exports = function(app) {

  app.get("/", function(request, response){
    response.render('clients/show');
  });

  app.get("/clients", function(request, response){

    var connection = app.config.db();
    var clientsModel = app.app.models.clientsModel;

    clientsModel.getClients(connection, function(error, result){
      response.render('clients/index', { clientes: result });
    });
  });
}