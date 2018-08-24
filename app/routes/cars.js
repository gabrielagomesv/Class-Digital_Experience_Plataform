module.exports = function(app) {

  app.get("/cars", function(request, response) {

    var connection = app.config.db();
    var carsModel = app.app.models.carsModel;

    carsModel.getCars(connection, function(error, result) {
      response.render('cars/index', { carros: result} );
    });
  });
}