//                              syf
// var chartData = {
//     labels: [],
//     temperature: [],
//     moisture: []
//   };
  
//   $.ajax({
//     url: 'get_data.php',
//     type: 'GET',
//     dataType: 'json',
//     success: function(data) {
//       for (var i = 0; i < data.length; i++) {
//         chartData.labels.push(data[i].date);
//         chartData.temperature.push(data[i].temperature);
//         chartData.moisture.push(data[i].moisture);
//       }
  
//       var chart = new jsChart('chart_container', 'line');
//       chart.setDataArray(chartData);
//       chart.draw();
//     }
//   });


//Połącznie się z bazą danych
/*
const sql = require('mssql')
const config = {
    user: 'zdalny2', //'root'
    password: 'EciePecie666!',//''
    server: 'localhost',
    database: 'projekt'
}

sql.connect(config).then(pool => {
    return pool.request()
        .query('SELECT * FROM termometr')
}).then(result => {
    console.log(result)
}).catch(err => {
    console.log(err)
})

*/

//wykres temperatury

//Ktoś ma to zautomatyzować aby brało datę i temperature z bazy


//temperatura i wilgotność

new Chart(document.getElementById("Temperatura"), {
    type: 'line',
    data: {
      labels: ["10", "11", "12", "13", "14", "15", "16"], 
      datasets: [{ 
          data: [10,12,14,16,18,16,14],
          label: "Temperature",
          borderColor: "#3e95cd",
          fill: false
        },
        { 
          data: [86,114,106,106,107,111,133],
          label: "Humidity",
          borderColor: "#3e23cd",
          fill: false
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Temperatura i wilgotność'
      }
    }
  });


  //wykres wilgoci
  /*

  new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
    labels: ["poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela"],
      datasets: [{ 
          data: [86,114,106,106,107,111,133],
          label: "Humidity",
          borderColor: "#3e23cd",
          fill: false
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Wilgotność'
      }
    }
  });

  */