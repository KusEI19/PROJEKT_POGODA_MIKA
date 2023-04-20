const axios = require('axios');

function wciskajDoBazy(dane,ktorySensor) {
    let query;

    if(ktorySensor == 2) {
        query = 'INSERT INTO wilgotnosc (id, wartosc, kiedy_pobrano) VALUES (NULL, "'+dane.data[ktorySensor].state.humidity+'", "'+dane.timeStamp.date+'");';
    }
    else if (ktorySensor == 3)   {
        query = 'INSERT INTO termometr (id, wartosc, kiedy_pobrano) VALUES (NULL, "'+dane.data[ktorySensor].state.temperature+'", "'+dane.timeStamp.date+'");';
    }

    const connection = require("mysql2").createConnection({
        host: "localhost",
        user: "zsti2",
        password: "EciePecie666!",
        database: "zsti2",
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


    axios.get('http://192.168.88.254/cf')
        .then(response => {
            for (let i = 2; i<=3; i++)  {
                wciskajDoBazy(response.data,i);
            }
        })
        .catch(error => {
            console.log(error);
        });
