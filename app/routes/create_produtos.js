module.exports = function(app) {

  app.get('/create_produtos', function(request, response){
    response.render('admin/create_produtos');
  });
}