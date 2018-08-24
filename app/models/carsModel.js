module.exports = function() {
  
  this.getCars = function(connection, callback) {
    connection.query("SELECT * FROM carros", callback);
  }
  return this;
}