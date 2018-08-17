var mysql = require('mysql');

module.exports = function() {
    return connection = mysql.createConnection(
        {
            host: 'Localhost',
            user: 'root',
            password: 'c714hj2nkq',
            database: 'sistema_produtos'
        }
    );
}