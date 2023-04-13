const connection = require("mysql2").createConnection({
    host: "localhost",
    user: "stahoo",
    password: "",
    database: "projekt",
  });
  
async function odpytaj(komenda) {
    connection
        .promise()
        .query(komenda)
        .then(function ([results, fields]) {
            console.log(results);
        })
        .catch(console.log);
}
odpytaj("SELECT * FROM test1");

// importowanie JSONa z serwera

connection.end();