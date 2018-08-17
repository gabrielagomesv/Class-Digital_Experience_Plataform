module.exports = function() {

  this.getProdutos = function(connection, callback) {
    connection.query('SELECT * FROM produto', callback);
  }
  return this;
}