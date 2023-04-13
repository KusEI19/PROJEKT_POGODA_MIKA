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
            return results;
        })
        .catch(console.log);
}
odpytaj("SELECT * FROM test1");

// importowanie JSONa z serwera

const axios = require('axios');

axios.get('http://imiki.pl/cf')
  .then(response => {
    przetworzJson(response.data);
  })
  .catch(error => {
    console.log(error);
  });

function przetworzJson(dane)    {
    console.log(dane.data[3]);
}

connection.end();