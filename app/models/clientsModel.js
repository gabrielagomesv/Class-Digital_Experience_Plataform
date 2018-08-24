module.exports = function() {
  
  this.getClients = function(connection, callback) {
    connection.query("SELECT * FROM clientes", callback);
  }
  return this;
}