const axios = require('axios');

function wciskajDoBazy(dane,ktorySensor) {
    let query;

    if(ktorySensor == 2) {
        query = 'INSERT INTO wilgotnosc (id, wartosc, kiedy_zczytano) VALUES (NULL, "'+dane.data[ktorySensor].state.humidity+'", "'+dane.timeStamp.date+'");';
    }
    else if (ktorySensor == 3)   {
        query = 'INSERT INTO termometr (id_odczytu, wartosc, kiedy_pobrano) VALUES (NULL, "'+dane.data[ktorySensor].state.temperature+'", "'+dane.timeStamp.date+'");';
    }

    const connection = require("mysql2").createConnection({
        host: "localhost",
        user: "stahoo",
        password: "",
        database: "projekt",
        });

    connection
        .promise()
        .query(query)
        .then(function ([results, fields]) {
            console.log(results);
        })
        .catch(console.log);

    connection.end();
}

setInterval(function() {
    axios.get('http://imiki.pl/cf')
        .then(response => {
            for (let i = 2; i<=3; i++)  {
                wciskajDoBazy(response.data,i);
            }
        })
        .catch(error => {
            console.log(error);
        });
}, 60000);