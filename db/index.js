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

const axios = require('axios');

axios.get('http://imiki.pl/cf')
  .then(response => {
    przetworzJson(response);
  })
  .catch(error => {
    console.log(error);
  });

function przetworzJson(dane)    {
    //console.log(dane.data[3]);  //index 3 to temperatura, index 2 to wilgotnosc

    odpytaj("INSERT INTO termometr (id_odczytu,wartosc,kiedy_pobrano) values (NULL, '69', '2069-01-01 21:37:00')")
}

connection.end();