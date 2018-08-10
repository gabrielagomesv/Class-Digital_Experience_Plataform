module.exports = function(app) {
  app.get('/sports', function(request, response){
    response.render('section/sports');
  });
}
