//zautomatyzwoać dane(seba ma wyciągnać dane z tabeli z php i podać je tutaj)

new Chart(document.getElementById("Temperatura"), {
    type: 'line',
    data: {
    labels: ["10", "11", "12", "13", "14", "15", "16"],
      datasets: [{ 
          data: [10,12,14,16,18,16,14],
          label: "Temperatura",
          borderColor: "#3e23cd",
          fill: false
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Temperatura'
      },
      responsive: true,
            scales: {
              xAxes: [ {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'Godzina'
                },
              } ],
              yAxes: [ {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'value'
                }
              } ]
            }
          }
        });

  new Chart(document.getElementById("Wilgotnosc"), {
    type: 'line',
    data: {
    labels: ["10", "11", "12", "13", "14", "15", "16"],
      datasets: [{ 
          data: [50,60,70,80,90,80,70],
          label: "Wilgotnosc",
          borderColor: "#21FA32",
          fill: false
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Wilgotność',
      },
      responsive: true,
            scales: {
              xAxes: [ {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'DGodzina'
                },
              } ],
              yAxes: [ {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'value'
                }
              } ]
            }
          }
        });